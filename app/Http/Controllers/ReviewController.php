<?php
namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Homestay;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function create($type, $id)
    {
        // Validate type
        $allowedTypes = ['homestay', 'activity'];
        if (!in_array($type, $allowedTypes)) {
            return redirect()->back()->with('error', 'Invalid review type.');
        }
    
        // Dynamically select model
        $modelClass = $type === 'homestay' ? Homestay::class : Activity::class;
    
        try {
            $model = $modelClass::findOrFail($id);
    
            return view('reviews.create', [
                'type' => $type,
                'id' => $id,
                $type => $model
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Resource not found.');
        }
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:homestay,activity',
            'id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);
    
        $type = $validated['type'];
        $id = $validated['id'];
    
        if ($type === 'homestay') {
            $homestay = Homestay::findOrFail($id);
            
            $review = $homestay->reviews()->create([
                'rating' => $validated['rating'],
                'comment' => $validated['comment'],
                'user_id' => auth()->id(),
            ]);
    
            return redirect()->route('homestays.show', $homestay->homestay_id)
                             ->with('success', 'Review submitted successfully');
        } elseif ($type === 'activity') {
            $activity = Activity::findOrFail($id);
            
            $review = $activity->reviews()->create([
                'rating' => $validated['rating'],
                'comment' => $validated['comment'],
                'user_id' => auth()->id(),
            ]);
    
            return redirect()->route('activities.show', $activity->activity_id)
                             ->with('success', 'Review submitted successfully');
        }
    }
    


    public function edit($review_id)
{
    // Find the review by its ID
    $review = Review::findOrFail($review_id);

    // Pass the review to the edit view
    return view('reviews.edit', compact('review'));
}


public function update(Request $request, $review_id)
{
    // Validate the incoming request
    $validated = $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:1000',
    ]);

    // Find the review by ID
    $review = Review::findOrFail($review_id);

    // Update the review fields
    $review->rating = $validated['rating'];
    $review->comment = $validated['comment'];
    $review->save();

    // Get the related "reviewable" model (homestay or activity)
    $reviewable = $review->reviewable;

    // Check if it's a homestay or activity and redirect accordingly
    if ($reviewable instanceof Homestay) {
        return redirect()->route('homestays.show', $reviewable->homestay_id)
                         ->with('success', 'Review updated successfully');
    } elseif ($reviewable instanceof Activity) {
        return redirect()->route('activities.show', $reviewable->activity_id)
                         ->with('success', 'Review updated successfully');
    }

}


    public function destroy(Review $review)
    {
        $redirectRoute = $review->reviewable_type === Homestay::class
            ? route('homestays.show', $review->reviewable_id)
            : route('activities.show', $review->reviewable_id);
    
        $review->delete();
    
        return redirect()->back()->with('success', 'Review deleted successfully');
    }
}
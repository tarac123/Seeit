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

    public function store(Request $request, $type, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500'
        ]);

        // Dynamically determine the model
        $modelClass = $type === 'homestay' ? Homestay::class : Activity::class;
        $model = $modelClass::findOrFail($id);

        // Create the review
        $review = new Review();
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->user_id = auth()->id();
        $review->reviewable_type = $modelClass;
        $review->reviewable_id = $model->id;
        $review->save();

        // Redirect back to the specific homestay or activity page
        $redirectRoute = $type === 'homestay' 
            ? route('homestays.show', $model) 
            : route('activities.show', $model);

        return redirect($redirectRoute)->with('success', 'Review submitted successfully!');
    }

    public function edit(Review $review)
    {
        // Check if the user is authorized to edit the review
        if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('dashboard')->with('error', 'Access denied.');
        }

        // Return the edit view with the review
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return back()->with('error', 'Access denied.');
        }
    
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);
    
        $review->update($request->only(['rating', 'comment']));
    
        // Determine if the review is for a homestay or activity
        $redirectRoute = $review->reviewable_type === Homestay::class
            ? route('homestays.show', $review->reviewable_id)
            : route('activities.show', $review->reviewable_id);
    
        return redirect($redirectRoute)->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $redirectRoute = $review->reviewable_type === Homestay::class
            ? route('homestays.show', $review->reviewable_id)
            : route('activities.show', $review->reviewable_id);
    
        $review->delete();
    
        return redirect($redirectRoute)->with('success', 'Review deleted successfully!');
    }
}
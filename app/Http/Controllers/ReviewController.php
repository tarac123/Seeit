<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Homestay;
use App\Models\Activity;

class ReviewController extends Controller
{
    public function create($type, $id)
    {
        if ($type === 'homestay') {
            $homestay = Homestay::where('homestay_id', $id)->first();
            
            return view('reviews.create', compact('type', 'homestay'));
        } elseif ($type === 'activity') {
            $activity = Activity::where('activity_id', $id)->first();
            
            return view('reviews.create', compact('type', 'activity'));
        }
    }
    public function destroy($review_id)
    {
        // Find review by id
        $review = Review::find($review_id);
    
        // get reviewable model activity or homestay)
        $reviewable = $review->reviewable;
    
        // If reviewable model is not found error
        if (!$reviewable) {
            return redirect()->back()->with('error', 'Related content not found.');
        }
        // delete review
        $review->delete();
    
        // Check if reviewable model is activity or homestay and redirect
        if ($reviewable instanceof Activity) {
            return redirect()->route('activities.show', ['activity' => $reviewable->activity_id])
                             ->with('success', 'Review deleted successfully.');
        } elseif ($reviewable instanceof Homestay) {
            return redirect()->route('homestays.show', ['homestay' => $reviewable->homestay_id])
                             ->with('success', 'Review deleted successfully.');
        }
    }
    
    public function store(Request $request)
    {
        $type = $request->input('type');
        $id = $request->input('id');
    
        $validated = $request->validate([
            'type' => 'required|in:homestay,activity',
            'id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);
    
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
}
<?php

use App\Models\Review;
use App\Models\Homestay;
use App\Models\Activity;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $type, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string'
        ]);

        // Determine model type dynamically
        $model = $this->getModel($type, $id);
        if (!$model) {
            return response()->json(['error' => 'Invalid review type'], 400);
        }

        // Create review
        $review = new Review([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        $model->reviews()->save($review);

        return response()->json(['message' => 'Review added successfully']);
    }


    private function getModel($type, $id)
    {
        $models = [
            'homestay' => Homestay::class,
            'activity' => Activity::class,
        ];

        return isset($models[$type]) ? $models[$type]::find($id) : null;
    }


    /**
     * Edit a review.
     */
    public function edit(Review $review)
    {
        // Check if the user is authorized to edit the review
        if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('genre.show')->with('error', 'Access denied.');
        }

        // Return the edit view with the review
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update a review.
     */
    public function update(Request $request, Review $review)
    {
        // Check authorization
        if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('homestays.index')->with('error', 'Access denied.');
        }
    
        // Validation for the review update
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);
    
        // Update the review with validated data
        $review->update($request->only(['rating', 'comment']));
    
        // Redirect back to the associated homestays's show page with a success message
        return redirect()->route('homestays.show', ['homestay' => $review->homestay_id])
        ->with('success', 'Review updated successfully.');
    }
    

    public function destroy(Review $review)
    {
        // Get the associated hoemstay ID
        $homestayId = $review->homestay_id;
    
        // Delete the review
        $review->delete();
    
        // Redirect to the hoemstay show page with success message
        return redirect()->route('homestays.show', ['homestay' => $homestayId])
        ->with('success', 'Review deleted successfully!');
    }
    
}

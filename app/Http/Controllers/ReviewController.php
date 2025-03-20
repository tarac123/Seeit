<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Homestay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function create(Homestay $homestay)
    {            
        return view('reviews.create', compact('homestay'));
    }
    
    public function store(Request $request, Homestay $homestay)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);
        
        $homestay->reviews()->create([
            'user_id' => auth()->id(),
            'homestay_id' => $homestay->homestay_id, // Use homestay_id, not id
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
        ]);
        
        return redirect()->route('homestays.show', ['homestay' => $homestay->homestay_id])
            ->with('success', 'Review added successfully!');
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

<form method="POST" action="{{ $action }}">
    @csrf
    @method($method)

    @if ($review)
        <!-- Editing an existing review -->
        <h3>Edit Review</h3>
    @else
        <!-- Creating a new review -->
        <h3>Write a Review</h3>
    @endif

    @if ($homestay)
        <input type="hidden" name="type" value="homestay">
        <input type="hidden" name="id" value="{{ $homestay->id }}">
    @elseif ($activity)
        <input type="hidden" name="type" value="activity">
        <input type="hidden" name="id" value="{{ $activity->id }}">
    @endif

    <!-- Rating Input -->
    <div class="form-group">
        <label for="rating">Rating (1 to 5)</label>
        <input type="number" name="rating" id="rating" class="form-control"
            value="{{ old('rating', $review ? $review->rating : '') }}" min="1" max="5" required>
    </div>

    <!-- Comment Input -->
    <div class="form-group">
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" class="form-control" rows="4"
            required>{{ old('comment', $review ? $review->comment : '') }}</textarea>
    </div>


    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">{{ $review ? 'Update Review' : 'Submit Review' }}</button>
</form>
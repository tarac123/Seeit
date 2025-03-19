@props(['action', 'method', 'homestay', 'review'])



<form action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

  
    <div class="mb-4">
        <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
        <select 
            name="rating" 
            id="rating" 
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        >
            <option value="">Select a Rating</option>
            <option value="1" {{ old('rating', $review->rating ?? '') == 1 ? 'selected' : '' }}>1 - Poor</option>
            <option value="2" {{ old('rating', $review->rating ?? '') == 2 ? 'selected' : '' }}>2 - Fair</option>
            <option value="3" {{ old('rating', $review->rating ?? '') == 3 ? 'selected' : '' }}>3 - Good</option>
            <option value="4" {{ old('rating', $review->rating ?? '') == 4 ? 'selected' : '' }}>4 - Very Good</option>
            <option value="5" {{ old('rating', $review->rating ?? '') == 5 ? 'selected' : '' }}>5 - Excellent</option>
        </select>
        @error('rating')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
        <textarea 
            name="comment" 
            id="comment" 
            rows="4"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        >{{ old('comment', $review->comment ?? '') }}</textarea>
        @error('comment')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">
    Submit
    </button>


</form>
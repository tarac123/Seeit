<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Write a Review for
            @if($type == 'homestay')
                {{ $homestay->homestay_name }}
            @elseif($type == 'activity')
                {{ $activity->activity_name }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="{{ $type }}">
                        <input type="hidden" name="id"
                            value="{{ $type == 'homestay' ? $homestay->homestay_id : $activity->activity_id }}">


                        <!-- Rating -->
                        <div class="mb-6">
                            <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                            <div class="rating flex space-x-1" id="star-container">
                                @for ($i = 1; $i <= 5; $i++)
                                    <label class="cursor-pointer text-gray-300 star" data-rating="{{ $i }}">
                                        <input type="radio" name="rating" value="{{ $i }}" class="hidden" {{ old('rating') == $i ? 'checked' : '' }}>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </label>
                                @endfor
                            </div>
                        </div>




                        <!-- Comment -->
                        <div class="mb-6">
                            <label for="comment" class="block text-sm font-medium text-gray-700 mb-2">Review</label>
                            <textarea id="comment" name="comment" rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#C1FA8F] focus:ring-[#C1FA8F]"
                                placeholder="Share your experience..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="px-2 py-1 bg-[#C1FA8F] text-sm border-2 border-black rounded-full text-gray-800 font-medium hover:bg-[#a1cf7a]">
                                Submit Review
                            </button>

                            @if ($type == 'homestay' && isset($homestay))
                                <a href="{{ route('homestays.show', ['homestay' => $homestay->homestay_id]) }}"
                                    class="text-gray-600 hover:text-gray-800">
                                    Cancel
                                </a>
                            @elseif ($type == 'activity' && isset($activity))
                                <a href="{{ route('activities.show', ['activity' => $activity->activity_id]) }}"
                                    class="text-gray-600 hover:text-gray-800">
                                    Cancel
                                </a>
                            @endif
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<!-- got this script online to help with the star rating feature -->
<script>
    document.querySelector('#star-container').addEventListener('click', function (e) {
        if (e.target.closest('.star')) {
            const clickedStar = e.target.closest('.star');
            const rating = parseInt(clickedStar.dataset.rating);
            const stars = document.querySelectorAll('.star');

            stars.forEach(star => {
                const starValue = parseInt(star.dataset.rating);
                star.classList.toggle('text-yellow-400', starValue <= rating);
                star.classList.toggle('text-gray-300', starValue > rating);
                star.querySelector('input').checked = starValue === rating;
            });
        }
    });

    // Initialize from any pre-selected value
    document.addEventListener('DOMContentLoaded', function () {
        const checked = document.querySelector('.star input:checked');
        if (checked) checked.closest('.star').click();
    });
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $homestay->homestay_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row">
                        <!-- Image Gallery -->
                        <div class="w-full md:w-2/3 mb-6 md:mb-0 md:pr-6">
                            @if(isset($homestay->homestay_images))
                                @php
                                    $images = explode(',', $homestay->homestay_images);
                                @endphp
                                <div class="relative">
                                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                                        <img 
                                            src="{{ asset('storage/' . trim($images[0])) }}" 
                                            alt="{{ $homestay->homestay_name }}" 
                                            class="w-full h-96 object-cover"
                                            id="mainImage"
                                        >
                                    </div>
                                    
                                    @if(count($images) > 1)
                                        <div class="mt-4 grid grid-cols-4 gap-2">
                                            @foreach($images as $index => $image)
                                                <div class="cursor-pointer rounded-lg overflow-hidden" onclick="changeMainImage('{{ asset('storage/' . trim($image)) }}')">
                                                    <img 
                                                        src="{{ asset('storage/' . trim($image)) }}" 
                                                        alt="{{ $homestay->homestay_name }} image {{ $index + 1 }}" 
                                                        class="w-full h-24 object-cover hover:opacity-80 transition-opacity duration-300"
                                                    >
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="w-full h-80 bg-gray-200 flex items-center justify-center rounded-lg">
                                    <span class="text-gray-500">No images available</span>
                                </div>
                            @endif
                        </div>

                        <!-- Homestay Details -->
                        <div class="w-full md:w-1/3">
                            <div class="border-b pb-4 mb-4">
                                <h1 class="text-2xl font-bold mb-2">{{ $homestay->homestay_name }}</h1>
                                <div class="flex items-center mb-2">
                                    <div class="flex text-yellow-400 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-600">4.5/5 (20 reviews)</span>
                                </div>
                                <p class="text-gray-700">{{ $homestay->homestay_location }}</p>
                            </div>

                            <div class="border-b pb-4 mb-4">
                                <div class="flex items-center justify-between mb-2">

                                </div>
                                <p class="text-gray-700 mb-2">Free cancellation up to 24 hours in advance</p>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xl font-bold">${{ $homestay->homestay_price }}</span>
                                    <span class="text-gray-600">per person</span>
                                </div>
                                <!-- <a href="{{ route('bookings.create', ['homestay_id' => $homestay->homestay_id]) }}" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded text-center block"> -->
                                    <!-- Reserve -->
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold mb-4">About this homestay</h3>
                        <div class="prose max-w-none">
                            <p class="mb-4">{{ $homestay->homestay_desc }}</p>
                        </div>
                    </div>

                    <!-- Rules -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold mb-4">Homestay Rules</h3>
                        <div class="prose max-w-none">
                            <p>{{ $homestay->homestay_rules }}</p>
                        </div>
                    </div>

                    <!-- Reviews -->
<div class="mt-8">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-bold">Reviews from other travelers</h3>
        @auth
            <a href="{{ route('reviews.create', ['homestay' => $homestay->homestay_id]) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded text-sm">
                Write a Review
            </a>
        @endauth
    </div>
    
    @if($homestay->reviews && $homestay->reviews->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($homestay->reviews as $review)
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center mb-2">
                        <div class="bg-green-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-2">
                            {{ substr($review->user->name ?? 'Anonymous', 0, 1) }}
                        </div>
                        <div>
                            <p class="font-medium">{{ $review->user->name ?? 'Anonymous' }}</p>
                            

                        </div>
                    </div>
                    <div class="flex text-yellow-400 mb-2">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $review->rating)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endif
                        @endfor
                    </div>
                    <p class="text-gray-700">{{ $review->comment }}</p>
                    
                    @auth
                        @if(auth()->id() == $review->user_id)
                            <div class="mt-3 flex space-x-2">
                                <a href="{{ route('reviews.edit', $review->id) }}" class="text-sm text-blue-600 hover:text-blue-800">Edit</a>
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm text-red-600 hover:text-red-800">Delete</button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            @endforeach
        </div>
        
        <!-- Average Rating Display -->
        <div class="mt-4">
            <p class="text-lg font-medium">Average Rating: {{ number_format($homestay->reviews->avg('rating'), 1) }}/5</p>
        </div>
    @else
        <div class="bg-gray-50 p-4 rounded-lg text-center">
            <p class="text-gray-600">No reviews yet. Be the first to leave a review!</p>
        </div>
    @endif
</div>
                    <!-- Back Button -->
                    <div class="mt-8">
                        <a href="{{ route('homestays.index') }}" class="text-blue-600 hover:text-blue-800">
                            &larr; Back to all homestays
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeMainImage(newSrc) {
            document.getElementById('mainImage').src = newSrc;
        }
    </script>
</x-app-layout>
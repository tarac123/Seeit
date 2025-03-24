
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success Message -->
            @if (session('success'))
            <div class="mb-4">
                <x-alert-success>
                    {{ session('success') }}
                </x-alert-success>
            </div>
            @endif


             <!-- Header Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                           
            <div class="bg-white-50 p-6">
                <h1 class="text-3xl font-bold mb-2">{{ $activity->activity_name }}</h1>
                
                <div class="flex items-center">
                    <div class="flex text-yellow-400">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= round($activity->reviews->avg('rating')))
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endif
                        @endfor
                    </div>
                    <span class="ml-2 font-semibold">{{ number_format($activity->reviews->avg('rating'), 1) }}/5</span>
                    <span class="ml-2 text-gray-600">{{ $activity->reviews->count() }} Reviews</span>
                </div>
            </div>
            
                <div class="p-6">
                    <div class="flex flex-col md:flex-row">
                        <!-- Images -->
                        <div class="w-full md:w-2/3 mb-6 md:mb-0 md:pr-6">
                            @if(isset($activity->activity_images))
                                @php
                                    $images = explode(',', $activity->activity_images);
                                @endphp
                                <div class="relative">
                                    <!-- Main large image -->
                                    <div class="bg-gray-200 rounded-lg overflow-hidden border-2 border-blue-200">
                                        <img 
                                            src="{{ asset('storage/' . trim($images[0])) }}" 
                                            alt="{{ $activity->activity_name }}" 
                                            class="w-full h-96 object-cover"
                                            id="mainImage"
                                        >
                                    </div>
                                    <!-- rest of images -->
                                    @if(count($images) > 1)
                                        <div class="mt-4 grid grid-cols-3 gap-2">
                                            @foreach(array_slice($images, 1, 3) as $index => $image)
                                                <div class="cursor-pointer rounded-lg overflow-hidden border-2 border-blue-200" onclick="changeMainImage('{{ asset('storage/' . trim($image)) }}')">
                                                    <img 
                                                        src="{{ asset('storage/' . trim($image)) }}" 
                                                        alt="{{ $activity->activity_name }} image {{ $index + 2 }}" 
                                                        class="w-full h-32 object-cover hover:opacity-80 transition-opacity duration-300"
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


                    </div>
                    <!-- activity Details -->
                        <div class="w-full mt-6">

                            <div class="pb-4 mb-4">
                                <p class="text-gray-700 mb-2">{{ $activity->activity_desc }}</p>
                            </div>

                            <!-- Pricing and Reservation Section -->
                            <div class="bg-gray-100 p-6 flex items-center justify-between border-t-4 border-[#C1FA8F] w-full md:w-1/3">
                                <div>
                                    <h3 class="text-2xl font-bold">${{ $activity->activity_price }}</h3>
                                    <p class="text-gray-600">per person</p>
                                </div>
                                <a href=" ['activity_id' => $activity->activity_id]) }}" class="bg-[#C1FA8F] hover:bg-[#AFDF84] text-black font-medium py-2 px-6 rounded-full text-sm border-2 border-black">
                                    Reserve
                                </a>
                            </div>
                        </div>


                    <!-- Description -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold mb-4">About this activity</h3>
                        <div class="prose max-w-none">
                            <p class="mb-4">{{ $activity->activity_fullDesc }}</p>
                        </div>
                    </div>

                    <!-- Duration -->
                    <div class="mt-8">
                        <h4 class="text-lg font-semi-bold mb-4">{{ $activity->activity_duration }}</h4>
                    </div>

            <!-- Reviews -->
            <div class="mt-8">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold">Reviews from other travelers</h3>
                    @auth
                        <a href="{{ route('reviews.create', ['activity' => $activity->activity_id]) }}" class="bg-[#C1FA8F] hover:bg-[#AFDF84] text-black font-medium py-2 px-6 rounded-full text-sm border-2 border-black">
                            Write a Review
                        </a>
                    @endauth
                </div>
    
            @if($activity->reviews && $activity->reviews->count() > 0)
                <!-- Featured Reviews -->
                @php
                    $featuredReviews = $activity->reviews->sortByDesc('rating')->take(2);
                    $featuredIds = $featuredReviews->pluck('id')->toArray();
                    $otherReviews = $activity->reviews->filter(function($review) use ($featuredIds) {
                        return !in_array($review->id, $featuredIds);
                    });
                @endphp
        
        <div class="mb-6">
            <h4 class="font-semibold text-lg mb-3">Featured Reviews</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($featuredReviews as $review)
                    <div class="bg-white-50 p-4 rounded-lg border border-grey-100">
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
                        <div class="flex items-center mb-2">
                            
                        <div class="bg-[#C1FA8F] text-black rounded-full w-8 h-8 flex items-center justify-center mr-2 border-2 border-black">
                            {{ substr($review->user->name ?? 'Anonymous', 0, 1) }}
                        </div>

                            <div>
                                <p class="font-medium">{{ $review->user->name ?? 'Anonymous' }}</p>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 mb-1">
                            {{ $review->created_at->format('F j, Y') }}
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
        </div>
        

                    <!-- All Other Reviews -->
                    @if($otherReviews->count() > 0)
                        <div>
                            <h4 class="font-semibold text-lg mb-3">All Reviews</h4>
                            <div class="bg-gray-50 rounded-lg">
                                @foreach($otherReviews as $review)
                                    <div class="p-4 border-b border-gray-200 last:border-b-0">
                                        <div class="flex items-start">
                                            <div class="bg-[#C1FA8F] text-black rounded-full w-8 h-8 flex items-center justify-center mr-2 border-2 border-black">
                                                {{ substr($review->user->name ?? 'Anonymous', 0, 1) }}
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex justify-between items-center mb-1">
                                                    <p class="font-medium">{{ $review->user->name ?? 'Anonymous' }}</p>
                                                    
                                                    <!-- Replace the star rating with text rating -->
                                                    <p class="text-grey-400 text-lg">
                                                        {{ $review->rating }}/5
                                                    </p>
                                                </div>
                                                <p class="text-gray-700 text-sm">{{ $review->comment }}</p>
                                                
                                                @auth
                                                    @if(auth()->id() == $review->user_id)
                                                        <div class="mt-2 flex space-x-2">
                                                            <a href="{{ route('reviews.edit', $review->id) }}" class="text-xs text-blue-600 hover:text-blue-800">Edit</a>
                                                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="text-xs text-red-600 hover:text-red-800">Delete</button>
                                                            </form>
                                                        </div>
                                                    @endif
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                        
                        <!-- Average Rating Display -->
                        <div class="mt-4">
                            <p class="text-lg font-medium">Average Rating: {{ number_format($activity->reviews->avg('rating'), 1) }}/5</p>
                        </div>
                    @else
                        <div class="bg-gray-50 p-4 rounded-lg text-center">
                            <p class="text-gray-600">No reviews yet. Be the first to leave a review!</p>
                        </div>
                    @endif
                    </div>

            

                    <!-- Back Button -->
                    <div class="mt-8">
                        <a href="{{ route('activities.index') }}" class="text-gray-500 hover:text-gray-700">
                            &larr; Back to all activities
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
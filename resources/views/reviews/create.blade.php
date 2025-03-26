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
                <form action="{{ route('reviews.store', ['type' => $type, 'id' => $id]) }}" method="POST">
                        @csrf
                        
                        <!-- Rest of the form remains the same -->

                        <div class="flex items-center justify-between">
                            <button type="submit" class="px-4 py-2 bg-[#C1FA8F] text-sm border-2 border-black rounded-full text-gray-800 font-medium hover:bg-[#a1cf7a]">
                                Submit Review
                            </button>

                            <a href="{{ $type == 'homestay' ? route('homestays.show', $homestay) : route('activities.show', $activity) }}" class="text-gray-600 hover:text-gray-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
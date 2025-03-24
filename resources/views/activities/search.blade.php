<x-app-layout>
    <x-slot name="header">
        <!-- give the search result header -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Results') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- displays the results of the search query -->
                    <h3 class="font-semibold text-lg mb-4">
                        Results for "{{ $query }}"
                    </h3>
                    
                    <!-- if the search results are empty it displays a message saying No homestays found -->
                    @if($homestays->isEmpty())
                        <p class="text-gray-500 text-center py-8">No Homestay found.</p>
                    @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">

                        <!-- displays the returned homestay results (homestay name, image, location) -->
                    @foreach($homestays as $homestay)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                        <a href="{{ route('homestays.show', $homestay->id) }}" class="block">
                            <div class="aspect-w-1 aspect-h-1">
                        <img 
                            src="{{ asset('images/homestays/' . $homestay->image) }}" 
                            alt="{{ $homestay->homestay_name }}" 
                            class="w-full h-48 object-cover"
                        >
                        </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800">
                            {{ $homestay->homestay_name }}
                        </h3>
                        <p class="text-green-500 mt-1">{{ $homestay->homestay_location }}</p>
                        <p class="text-sm text-gray-600 mt-2">
                            Rating {{ \Carbon\Carbon::parse($homestay->homestay_name)}}
                        </p>
                    </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


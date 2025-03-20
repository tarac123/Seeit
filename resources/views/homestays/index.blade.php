<!-- resources/views/homestays/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
             <!-- Search bar -->

             <!-- allows for searching album titles, songs and artists  -->
             <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <form action="{{ route('homestays.search') }}" method="GET" class="flex items-center">
                        <input 
                            type="text" 
                            name="query" 
                            placeholder="Search Homestays / Locations" 
                            class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm w-64"
                            required>
                        <button type="submit" class="ml-2 px-3 py-2 bg-green-500 text-white rounded-md hover:bg-black hover:text-green-500">
                            Search
                        </button>
                    </form>
                </div>
    </x-slot>

    <!-- Success Message -->
    @if (session('success'))
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">All Homestays</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($homestays as $homestay)
                            <!-- Homestay Card Component -->
                            <a href="{{ route('homestays.show', $homestay->homestay_id) }}" class="block">
                            <x-homestay-card :homestay="$homestay" />
                        </a>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

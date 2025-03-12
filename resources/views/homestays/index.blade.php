<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homestays') }}
        </h2>
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
                                <x-homestay-card 
                                    :homestay_name="$homestay->homestay_name"
                                     
                                    :homestay_location="$homestay->homestay_location" 
                                    :homestay_price="$homestay->homestay_price"
                                />
                                <!-- homestay image to be inserted above when separated! -->
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homestay Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Image and Details -->
                    <div class="flex flex-col md:flex-row md:space-x-9 mb-8">
                        <!-- Homestay  Info-->
                        <div class="md:w-1/2">
                            <!-- Homestay name -->
                            <h3 class="font-bold text-3xl text-green-500 mb-4 mt-4">{{ $homestay->homestay_name }}</h3>
                            <!-- Lcoation -->
                            <div class="space-y-4">
                                <p class="text-xl">
                                    <span class="font-bold">Location </span> <!-- makes the word "artist" bold-->
                                    <span class="">{{ $homestay->homestay_location }}</span>
                                </p>
                            <!--Release date  -->
                                <p class="text-gray-800 text-xl">
                                    <span class="font-bold">Release Date: </span> <!-- makes "release date:" bold-->
                                    <span class=""> {{ \Carbon\Carbon::parse($album->release_date)->format('d M Y') }}</span>
                                </p>
                            <!-- Duration -->
                                <p class="text-gray-800 text-xl">
                                    <span class="font-bold">Duration: </span> <!-- makes "duration" bold-->
                                    <span class="">{{ $album->duration }} mins </span>
                                </p>
                            </div>
                        </div>
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>


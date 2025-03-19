<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    @if(isset($homestay->homestay_images))
        @php
            // Split the comma-separated image paths and get the first image
            $images = explode(',', $homestay->homestay_images);
            $firstImage = trim($images[0]);
            // Debug the path
            // dd(asset('storage/' . $firstImage)); // Uncomment to debug
        @endphp
        <img src="{{ asset('storage/' . $firstImage) }}" alt="{{ $homestay->homestay_name }}" class="w-full h-48 object-cover">
    @endif
    <div class="p-4">
        <h3 class="font-bold text-lg mb-2">{{ $homestay->homestay_name }}</h3>
        <p class="text-gray-600 mb-2">{{ $homestay->homestay_location }}</p>
        <p class="text-gray-800 font-semibold">${{ $homestay->homestay_price }} per night</p>
    </div>
</div>
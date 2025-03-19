@props(['action', 'method', 'homestay' => null])


<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif 

    <!-- Name Input -->
    <div class="mb-4">
        <label for="homestay_name" class="block text-sm text-gray-700">Name</label>
        <input
            type="text"
            name="homestay_name"
            id="homestay_name"
            value="{{ old('homestay_name', $homestay->homestay_name ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

        <!-- Location Input -->
        <div class="mb-4">
        <label for="homestay_location" class="block text-sm text-gray-700">Location</label>
        <input
            type="text"
            name="homestay_location"
            id="homestay_location"
            value="{{ old('homestay_location', $homestay->homestay_location ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

        <!-- Description Input -->
        <div class="mb-4">
        <label for="homestay_desc" class="block text-sm text-gray-700">Description</label>
        <input
            type="text"
            name="homestay_desc"
            id="homestay_desc"
            value="{{ old('homestay_desc', $homestay->homestay_desc ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

        <!-- Rules Input -->
        <div class="mb-4">
        <label for="homestay_rules" class="block text-sm text-gray-700">Homestay Rules</label>
        <input
            type="text"
            name="homestay_rules"
            id="homestay_rules"
            value="{{ old('homestay_rules', $homestay->homestay_rules ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

        <!-- Price Input -->
        <div class="mb-4">
        <label for="homestay_price" class="block text-sm text-gray-700">Price per Night</label>
        <input
            type="text"
            name="homestay_price"
            id="homestay_price"
            value="{{ old('homestay_price', $homestay->homestay_price ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

<!-- Image Input -->
<div class="mb-4">
    <label for="homestay_images" class="block text-sm font-medium text-gray-700">Images (Select multiple)</label>
    <input
        type="file"
        name="homestay_images[]"
        id="homestay_images"
        multiple
        {{ isset($homestay) ? '' : 'required' }} 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />

    @error('homestay_images')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
    
    @if(isset($homestay) && $homestay->homestay_images)
        <div class="mt-2">
            <p class="text-sm text-gray-500">Current images:</p>
            <div class="flex flex-wrap gap-2 mt-1">
                @foreach(explode(',', $homestay->homestay_images) as $image)
                    <div class="relative">
                        <img src="{{ asset('storage/' . trim($image)) }}" alt="Homestay image" class="h-16 w-16 object-cover rounded">
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>


    <!-- Submit Button -->
    <div>
        <x-primary-button>
            {{ isset($homestay) ? 'Update Homestay' : 'Add Homestay' }}
        </x-primary-button>
    </div>

        <!-- Success Message -->
        @if (session('success'))
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>
    @endif
</form>
<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative min-h-[600px]">
        <!-- Main content section -->
        <div class="w-full md:w-1/2 p-6">
          <div class="text-7xl font-bold mb-6">
            {{ __("What is") }}<br>
            <span class="block mt-5">{{ __("Seeit?") }}</span>
          </div>
          <div class="text-gray-900 mb-8">
            {{ __("Welcome to See It – your gateway to authentic travel experiences. We specialize in connecting you with local homestays and tours that offer a genuine taste of the places you visit. Our mission is simple: to support local communities by directing more travel funds back into the hands of the people who call these destinations home. Unlike corporate-run tours that often take profits away from the local economy, See It ensures that your travels benefit the hardworking locals, providing you with unique, personal experiences while empowering the communities that make each destination special. Discover the true spirit of your journey, and help create a lasting impact with every booking.") }}
          </div>
          <div>
            <a href="{{ route('homestays.index') }}" class="inline-block p-4 bg-[#C1FA8F] border-2 border-black rounded-full text-gray-800 font-medium hover:bg-[#a1cf7a]">
              {{ __("Start your next journey") }}
            </a>
          </div>
        </div>
        
        <!-- Images section with absolute positioning -->
        <div class="hidden md:block">
          <!-- Top right image -->
          <div class="absolute top-8 right-20 ">
            <img src="storage/images/dashboard1.png" class="rounded-2xl border-2 border-red-500 shadow-md w-100 h-48 object-cover">
          </div>
          
          <!-- Middle right image -->
          <div class="absolute top-8 right-3 transform translate-x-1/2">
            <img src="storage/images/dashboard2.png" class="border-2 border-color-red rounded-2xl shadow-md w-100 h-48 object-cover">
          </div>
          
          <!-- Bottom right image -->
          <div class="absolute bottom-8 right-20 ">
            <img src="storage/images/dashboard3.png"  class="rounded-2xl shadow-md w-100 h-48 object-cover">
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
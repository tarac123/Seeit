<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#C1FA8F] text-[#1b1b18] border border-transparent hover:border-[#C1FA8F] dark:hover:border-[#3E3E3A] rounded-2xl text-md border-2 hover:scale-110 transform transition duration-300"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#C1FA8F]  border-2 border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-2xl text-sm leading-normal hover:scale-110 transform transition duration-300">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

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
            <a href="{{ route('register') }}" class="inline-block p-4 bg-[#C1FA8F] border-2 border-black rounded-full text-gray-800 font-medium hover:bg-[#a1cf7a] hover:scale-110 transform transition duration-300">
              {{ __("Start your next journey") }}
            </a>
          </div>
        </div>
        
        <!-- Images section with absolute positioning -->
        <div class="hidden md:block">
          <!-- Top  image -->
          <div class="absolute top-8 right-60 ">
            <img src="storage/images/dashboard1.png" class="rounded-2xl shadow-md w-100 h-48 object-cover hover:shadow-lg hover:scale-110 transform transition duration-300">
          </div>
          
          <!-- Middle  image -->
          <div class="absolute top-48 right-40 transform translate-x-1/2">
            <img src="storage/images/dashboard2.png" class="rounded-2xl shadow-md w-100 h-48 object-cover hover:scale-110 transform transition duration-300">
          </div>
          
          <!-- Bottom image -->
          <div class="absolute bottom-8 right-60  ">
            <img src="storage/images/dashboard3.png"  class="rounded-2xl shadow-md w-100 h-48 object-cover hover:scale-110 transform transition duration-300">
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
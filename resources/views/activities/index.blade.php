
<x-app-layout>
    <x-slot name="header">
             <!-- Search bar -->

             <!-- searching activity name and locations  -->
             <div class="hidden sm:flex sm:items-center sm:ml-6">
    <form action="{{ route('activities.search') }}" method="GET" class="flex items-center">
        <input 
            type="text" 
            name="query" 
            placeholder="Search Activities / Locations" 
            class="border-gray-300 rounded-2xl shadow-sm focus:ring-[#C1FA8F] focus:border-[#C1FA8F] text-sm w-64"
            required
        >
        <button 
            type="submit" 
            class="ml-2 px-3 py-2 bg-black text-white rounded-3xl hover:bg-black hover:text-[#C1FA8F] flex items-center"
        >
            <!-- search svg -->
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256" class="mr-2">
                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <g transform="scale(8,8)">
                        <path d="M19,3c-5.51172,0 -10,4.48828 -10,10c0,2.39453 0.83984,4.58984 2.25,6.3125l-7.96875,7.96875l1.4375,1.4375l7.96875,-7.96875c1.72266,1.41016 3.91797,2.25 6.3125,2.25c5.51172,0 10,-4.48828 10,-10c0,-5.51172 -4.48828,-10 -10,-10zM19,5c4.42969,0 8,3.57031 8,8c0,4.42969 -3.57031,8 -8,8c-4.42969,0 -8,-3.57031 -8,-8c0,-4.42969 3.57031,-8 8,-8z"></path>
                    </g>
                </g>
            </svg>  
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
                    <h3 class="font-semibold text-lg mb-4">All Activities</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($activities as $activity)
                            <!-- activity Card Component -->
                            <a href="{{ route('activities.show', $activity->activity_id) }}" class="block">
                            <x-activity-card :activity="$activity" />
                        </a>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

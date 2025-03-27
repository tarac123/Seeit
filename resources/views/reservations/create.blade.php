<x-reservation-layout>
    <h1 class="text-2xl font-bold mb-6">
        Reserve: {{ $type === 'homestays' ? $item->homestay_name : $item->activity_name }}
    </h1>
    
    <form action="{{ route('reservations.process', ['type' => $type, 'id' => $item->homestay_id ?? $item->activity_id]) }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @if($type === 'homestays')
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="check_in_date">
                        Check-in Date
                    </label>
                    <input type="date" name="check_in_date" id="check_in_date" 
                        class="w-full px-3 py-2 border rounded-lg" 
                        required
                        min="{{ now()->format('Y-m-d') }}">
                </div>

                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="check_out_date">
                        Check-out Date
                    </label>
                    <input type="date" name="check_out_date" id="check_out_date" 
                        class="w-full px-3 py-2 border rounded-lg" 
                        required>
                </div>
            @else
                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="check_in_date">
                        Activity Date
                    </label>
                    <input type="date" name="check_in_date" id="check_in_date" 
                        class="w-full px-3 py-2 border rounded-lg" 
                        required
                        min="{{ now()->format('Y-m-d') }}">
                </div>
            @endif

            <div>
                        <label class="block text-gray-700 font-bold mb-2" for="guests">
                            Number of Guests
                        </label>
                        <input type="number" name="guests" id="guests" 
                            class="w-full px-3 py-2 border rounded-lg" 
                            min="1" max="10" 
                            required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="full_name">
                            Full Name
                        </label>
                        <input type="text" name="full_name" id="full_name" 
                            class="w-full px-3 py-2 border rounded-lg" 
                            required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email
                        </label>
                        <input type="email" name="email" id="email" 
                            class="w-full px-3 py-2 border rounded-lg" 
                            required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="phone">
                            Phone Number
                        </label>
                        <input type="tel" name="phone" id="phone" 
                            class="w-full px-3 py-2 border rounded-lg" 
                            required>
                    </div>

                </div>

            <div class="mt-6">
                <button type="submit" 
                    class="w-full bg-[#C1FA8F] hover:bg-[#AFDF84] text-black font-bold py-3 px-4 rounded-3xl border-2 border-black transition duration-300 hover:scale-105 transform transition duration-300">
                    Confirm Reservation
                </button>
            </div>
        </div>
    </form>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkInDate = document.getElementById('check_in_date');
        const checkOutDate = document.getElementById('check_out_date');

        @if($type === 'homestays')
        checkInDate.addEventListener('change', function() {
            checkOutDate.min = this.value;
        });
        @endif
    });
    </script>
</x-reservation-layout>
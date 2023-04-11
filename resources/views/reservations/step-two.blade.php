@extends('layouts.guest')

@section('content')
    <header class="reservation">
        <div class="container px-4 px-lg-5 h-100">
            <div class="flex items-center min-h-screen">
                <div class="flex-1 h-full items-center max-w-4xl mx-auto rounded-lg shadow-xl">
                    <div class="flex  items-center flex-col md:flex-row">
                        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                            <div class="items-center w-full">
                                <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>
                                    <div
                                        class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                        Step 2
                                    </div>


                                <form method="POST" action="{{ route('reservations.store.step.two') }}">
                                    @csrf
                                    <div class="sm:col-span-6 items-center pt-5">
                                        <label for="status" class="block text-sm text-white font-medium text-center text-gray-700">Table</label>
                                        <div class="mt-1">
                                            <select id="table_id" name="table_id"
                                                    class="form-multiselect block w-full mt-1">
                                                @foreach ($tables as $table)
                                                    <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                                        {{ $table->name }}
                                                        ({{ $table->guest_number }} Guests)
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('table_id')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mt-6 p-4 flex items-center justify-between">
                                        <a href="{{ route('reservations.step.one') }}"
                                           class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Previous</a>
                                        <button type="submit"
                                                class="px-4 py-2 hover:bg-indigo-700 rounded-lg text-black">Make Reservation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

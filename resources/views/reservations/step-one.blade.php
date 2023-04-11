@extends('layouts.guest')

@section('content')
    <header class="reservation">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-white text-center">

                <div class="flex items-center min-h-screen">
                    <div class="flex-1 h-full max-w-4xl mx-auto rounded-lg shadow-xl">
                        <div class="flex flex-col md:flex-row">
                            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                                <div class="w-full">
                                    <h3 class="mb-4 text-xl font-bold text-blue-600">Napravite rezervaciju</h3>

                                    <form method="POST" action="{{ route('reservations.store.step.one') }}">
                                        @csrf
                                        <div class="sm:col-span-6">
                                            <label for="first_name" class="block text-sm font-medium text-gray-700"> Ime
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" id="first_name" name="first_name"
                                                       value="{{ $reservation->first_name ?? '' }}"
                                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('first_name')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label for="last_name" class="block text-sm font-medium text-gray-700"> Prezime
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" id="last_name" name="last_name"
                                                       value="{{ $reservation->last_name ?? '' }}"
                                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('last_name')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                                            <div class="mt-1">
                                                <input type="email" id="email" name="email"
                                                       value="{{ $reservation->email ?? '' }}"
                                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('email')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label for="phone_number" class="block text-sm font-medium text-gray-700"> Broj Telefona
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" id="phone_number" name="phone_number"
                                                       value="{{ $reservation->phone_number ?? '' }}"
                                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('tel_number')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label for="reservation_date" class="block text-sm font-medium text-gray-700"> Datum rezervacije
                                            </label>
                                            <div class="mt-1">
                                                <input type="datetime-local" id="reservation_date" name="reservation_date"
                                                       min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                                       max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                                       value="{{ $reservation ? (\Carbon\Carbon::Parse($reservation->reservation_date))->format('Y-m-d\TH:i:s') : '' }}"
                                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            <span class="text-xs">Molimo Vas izaberite vreme između 15:00 i 22:00.</span>
                                            @error('res_date')
                                            <div class="text-sm text-red-400 mb-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Broj gostiju
                                            </label>
                                            <div class="mt-1">
                                                <input type="number" id="guest_number" name="guest_number"
                                                       value="{{ $reservation->guest_number ?? '' }}"
                                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('guest_number')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mt-6 p-4 flex justify-end">
                                            <button type="submit"
                                                    class="px-4 py-2 hover:bg-indigo-700 rounded-lg text-black">Dalje</button>
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

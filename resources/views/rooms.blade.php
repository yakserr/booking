<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rooms') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($hotels as $hotel)
                <div class="hidden sm:-my-px sm:mx-10 sm:block p-6 text-center  bg-white border-b border-gray-200">
                    <button
                        class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            {{ $hotel->name }}
                        </span>
                    </button>
                    <div class="flex flex-col space-x-8 w-full lg:flex-row justify-center mt-6">
                        @foreach ($hotel->rooms as $room)

                        <div
                            class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <img class="rounded-t-lg" src="https://placeimg.com/640/480/nature" alt="">
                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $room->name }}
                                </h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Here's the best Room we provide
                                </p>
                                <form action="{{ route('bookings.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                                    @if ($room->status == 'booked')
                                    <button type="button"
                                        class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                        disabled>Booked</button>
                                    @else

                                    <button type="submit"
                                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Booking Now
                                    </button>

                                    @endif
                                </form>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

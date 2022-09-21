<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x:notify-messages />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700
                                    dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Hotel
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Room
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Check in
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $booking->room->hotel->name }}
                                        </th>
                                        <td class="py-4 px-6">
                                            {{ $booking->room->name }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $booking->check_in }}
                                        </td>
                                    </tr>
                                    @endforeach
                                    @empty($booking)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td colspan="6" class="px-4 py-4 text-xl text-center">
                                            No Data Found.
                                            <a href="{{ route('rooms.index') }}">
                                                <button type="button"
                                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Booking Now
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endempty
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

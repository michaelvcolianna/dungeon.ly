<x-guest-layout>
    <div class="relative flex sm:items-center justify-center sm:min-h-screen bg-white py-4">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 px-6 py-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-60 sm:justify-start sm:pt-0">
                <x-svg.logo class="h-10 w-auto text-red-700 sm:h-20" />
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Tabletop RPG Helper (v0.1)
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--
                If this the current user's team, there are a whole bunch of
                options (to come later)

                Otherwise, they get the character list for sure; if the DM has
                put in any "public" data, that will also print.
            --}}

            <livewire:dashboard.character-list />
        </div>
    </div>
</x-app-layout>

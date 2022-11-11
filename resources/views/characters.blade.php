<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Characters for') }}
            {{ auth()->user()->currentTeam->name }}
        </h2>

        <livewire:character.add-button />
    </x-slot>

    <livewire:character.listing />
</x-app-layout>

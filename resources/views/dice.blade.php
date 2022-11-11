<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dice') }}
        </h2>
    </x-slot>

    <livewire:dice-roller />
</x-app-layout>

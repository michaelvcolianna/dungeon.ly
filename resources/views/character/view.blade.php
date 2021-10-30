<x-app-layout>
    <x-slot name="header">
        <livewire:character.header :character="$character" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:character.details :character="$character" />
        </div>
    </div>
</x-app-layout>

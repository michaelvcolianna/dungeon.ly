<x-app-layout>
    <x-slot name="header">
        <livewire:character.header />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4">
                <x-shared.section :expanded="true">
                    <x-slot name="header">
                        Details
                    </x-slot>

                    Character Details
                </x-shared.section>
            </div>
        </div>
    </div>
</x-app-layout>

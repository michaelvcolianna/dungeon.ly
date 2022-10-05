@if($character)
    <div class="grid gap-4">
        @foreach($groups as $group => $fields)
            <x-section :group="$group">
                <x-slot:title>{{ $this->buildLabel($group) }}</x-slot:title>

                <div class="grid grid-cols-6 gap-6">
                    @foreach($fields as $field => $config)
                        <div class="col-span-6 sm:col-span-4" wire:key="field-{{ $field }}">
                            @if($this->isRegular($config))
                                <x-form.field :name="$field" :config="$config" />
                            @else
                                <livewire:is :component="$this->componentName($config)" :name="$field" :config="$config" />
                            @endif
                        </div>
                    @endforeach
                </div>
            </x-section>

            <x-jet-section-border />
        @endforeach

        @for($i = 1; $i < 10; $i++)
            <x-section group="spell-level-{{ $i }}">
                <x-slot:title>Spell Level {{ $i }}</x-slot:title>

                <livewire:form.spell-level-field :number="$i" />
            </x-section>

            @if($i < 9)
                <x-jet-section-border />
            @endif
        @endfor
    </div>
@else
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-white">
            <div class="mt-8 text-2xl">
                No Character Selected
            </div>

            <div class="mt-6 text-gray-500">
                It looks like you haven't chosen a character from the dashboard.
            </div>

            <div class="mt-6">
                <x-jet-button wire:click="goToDashboard">Go There</x-jet-button>
            </div>
        </div>
    </div>
@endif

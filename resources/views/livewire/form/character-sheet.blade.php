@if($character)
    <div>
        <x-form.finder />

        <div class="grid gap-4">
            @if($this->canBeNpc())
                <x-section id="group-npc">
                    <x-slot:title>NPC Status</x-slot:title>

                    <div class="grid gap-6">
                        <x-field.checkbox name="deleted_at" label="Is an NPC" :checked="$character->is_npc" />
                    </div>
                </x-section>
            @endif

            @foreach($groups as $group => $fields)
                <x-section id="group-{{ $group }}">
                    <x-slot:title>{{ $this->buildLabel($group) }}</x-slot:title>

                    <div class="grid gap-6">
                        @foreach($fields as $field => $config)
                            @if($this->isRegular($config))
                                <x-form.field :group="$group" :name="$field" :config="$config" wire:key="field-{{ $group }}-{{ $field }}" />
                            @else
                                <livewire:is :component="$this->componentName($config)" :name="$field" :config="$config" wire:key="field-{{ $group }}-{{ $field }}" />
                            @endif
                        @endforeach
                    </div>
                </x-section>

                <x-jet-section-border />
            @endforeach
        </div>
    </div>
@else
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-white">
            <div class="mt-8 text-2xl">
                No Character Selected
            </div>

            <div class="mt-6 text-gray-500">
                It looks like you haven't chosen a character for {{ $game }} from the dashboard.
            </div>

            <div class="mt-6">
                <x-jet-button wire:click="goToDashboard">Go There</x-jet-button>
            </div>
        </div>
    </div>
@endif

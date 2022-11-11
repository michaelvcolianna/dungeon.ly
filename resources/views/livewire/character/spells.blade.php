<div class="grid gap-4" data-field-label="List of level {{ $spell_level->number }} spells">
    <div class="block font-medium text-sm text-gray-700">
        @if($spell_level->spells->isNotEmpty())
            Level {{ $spell_level->number }} Spells
        @else
            <span class="italic">No spells at level {{ $spell_level->number }}</span>
        @endif
    </div>

    @if($spells->isNotEmpty())
        @foreach($spells as $sid => $spell)
            <div class="grid gap-4 grid-cols-[1rem,1fr,3rem]" wire:key="spell-{{ $spell->id }}">
                <div class="mt-4">
                    <label class="flex gap-2">
                        <x-jet-checkbox rel="field" id="spell.{{ $spell->id }}.is_prepared" wire:model="spells.{{ $sid }}.is_prepared" />
                        <span class="sr-only">Level {{ $spell_level->number }} Spell #{{ $loop->iteration }} Prepared?</span>
                    </label>
                </div>

                <div>
                    <x-jet-label class="sr-only" for="spell.{{ $spell->id }}.name" value="Level {{ $spell_level->number }} Spell #{{ $loop->iteration }} Name" />
                    <x-jet-input rel="field" id="spell.{{ $spell->id }}.name" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="spells.{{ $sid }}.name" />
                </div>

                <div class="text-right self-end">
                    <x-jet-danger-button class="h-[2.65rem]" wire:click="deleteSpell({{ $spell->id }})">
                        <span class="sr-only">Delete Level {{ $spell_level->number }} Spell {{ $spell->id }}</span>
                        <x-svg.trash class="h-4 w-4 stroke-[3]" />
                    </x-jet-danger-button>
                </div>
            </div>
        @endforeach
    @endif

    <div>
        <x-jet-button wire:click="addSpell">Add Spell</x-jet-button>
    </div>
</div>

<div class="grid gap-4" data-field-label="Spell Level {{ $spell_level->number }}">
    <div class="hidden sm:block font-medium text-sm text-gray-700">{{ $label }}</div>

    <div class="hidden sm:grid gap-4 grid-cols-4 font-bold text-xs text-gray-700 uppercase">
        <span>Slots Total</span>
        <span>Slots Expended</span>
    </div>

    <div class="grid gap-4 grid-cols-2 sm:grid-cols-4">
        <div>
            <x-jet-label class="sm:sr-only" for="{{ $idBase }}.slots_total" value="{{ $label }} Slots Total" />
            <x-jet-input rel="field" id="{{ $idBase }}.slots_total" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="spell_level.slots_total" />
        </div>

        <div>
            <x-jet-label class="sm:sr-only" for="{{ $idBase }}.slots_expended" value="{{ $label }} Slots Expended" />
            <x-jet-input rel="field" id="{{ $idBase }}.slots_expended" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="spell_level.slots_expended" />
        </div>
    </div>
</div>

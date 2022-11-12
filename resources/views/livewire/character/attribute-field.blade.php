<div class="grid grid-cols-3 gap-4 sm:grid-cols-2 sm:gap-y-0 relative" data-field-label="{{ $label }}">
    <div class="mt-7 sm:mt-0 sm:col-span-2">
        <x-shared.roll-label :label="$label" />
    </div>

    <div>
        <x-jet-label for="{{ $idBase }}.value">
            <span class="sr-only">{{ $label }} Value</span>
            <span class="text-xs font-bold uppercase">Value</span>
        </x-jet-label>

        <x-jet-input rel="field" id="{{ $idBase }}.value" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="attribute.value" />
    </div>

    <div>
        <x-jet-label for="{{ $idBase }}.value">
            <span class="sr-only">{{ $label }} Bonus</span>

            <span class="text-xs font-bold uppercase">Bonus</span>
        </x-jet-label>

        <x-jet-input rel="field" id="{{ $idBase }}.bonus" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="attribute.bonus" />
    </div>
</div>

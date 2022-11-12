<div class="flex gap-4 items-center" data-field-label="{{ $label }} Save">
    <div class="mt-[1.5rem] sm:mt-6">
        <label class="flex gap-2">
            <x-jet-checkbox rel="field" id="{{ $idBase }}.is_proficient" wire:model="saving_throw.is_proficient" />
            <span class="sr-only">Proficient?</span>
        </label>
    </div>

    <div data-field-label="{{ $label }}" class="flex-grow">
        <x-jet-label for="{{ $idBase }}.value">
            <x-shared.roll-label :label="$label" />
        </x-jet-label>

        <x-jet-input id="{{ $idBase }}.value" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="saving_throw.value" />
    </div>
</div>

<div class="flex gap-4 items-center" data-field-label="{{ $label }}">
    <div class="mt-5">
        <label class="flex gap-2">
            <x-jet-checkbox rel="field" id="{{ $idBase }}.is_proficient" wire:model="skill.is_proficient" />
            <span class="sr-only">Proficient?</span>
        </label>
    </div>

    <div class="flex-grow">
        <x-jet-label for="{{ $idBase }}.value" class="relative">
            {{ $label }}

            <span class="ml-2 text-xs uppercase absolute right-0 bottom-0.5">{{ $attribute }}</span>
        </x-jet-label>

        <x-jet-input rel="field" id="{{ $idBase }}.value" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="skill.value" />
    </div>
</div>

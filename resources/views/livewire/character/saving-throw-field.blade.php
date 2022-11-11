<div class="flex gap-4 items-center" data-field-label="{{ $label }} Save">
    <div class="mt-5">
        <label class="flex gap-2">
            <x-jet-checkbox rel="field" id="{{ $idBase }}.is_proficient" wire:model="saving_throw.is_proficient" />
            <span class="sr-only">Proficient?</span>
        </label>
    </div>

    <x-jet-field.string class="flex-grow" id="{{ $idBase }}.value" model="saving_throw.value" label="{{ $label }}" />
</div>

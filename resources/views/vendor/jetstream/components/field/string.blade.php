@props(['id' => null, 'model', 'label'])

<div data-field-label="{{ $label }}" {{ $attributes }}>
    <x-jet-label :for="$id ?? $model" :value="$label" />
    <x-jet-input :id="$id ?? $model" class="block mt-1 w-full" type="text" :wire:model.debounce.500ms="$model" />
</div>

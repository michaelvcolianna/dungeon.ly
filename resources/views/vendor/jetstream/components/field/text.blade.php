@props(['model', 'label', 'value'])

<div data-field-label="{{ $label }}" x-data wire:ignore {{ $attributes }}>
    <x-jet-label :for="$model" :value="$label" />
    <div class="grow-wrap" x-ref="text" data-replicated-value="{{ $value }}">
        <textarea rel="field" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" wire:model.debounce.500ms="{{ $model }}" @input="$refs.text.dataset.replicatedValue = $event.target.value"></textarea>
    </div>
</div>

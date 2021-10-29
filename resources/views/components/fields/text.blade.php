@props(['id', 'label', 'type' => 'text'])

<div>
    <label
        for="{{ $id }}"
        {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}
    >
        {{ $label }}
    </label>

    <input
        type="{{ $type }}" id="{{ $id }}" wire:model.debounce.500ms="{{ $id }}"
        {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
    />
</div>

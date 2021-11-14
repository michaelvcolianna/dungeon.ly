@props(['name', 'label'])

<div>
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700">
        {!! $label !!}
    </label>

    <input
        type="text" id="{{ $name }}" wire:model.debounce.500ms="{{ $name }}"
        class="
            border-gray-300 focus:border-indigo-300 focus:ring w-full
            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm
        "
    />
</div>

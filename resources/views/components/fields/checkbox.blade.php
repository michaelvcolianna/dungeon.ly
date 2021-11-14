@props(['name', 'label'])

<div>
    <label
        for="{{ $name }}" class="
            block font-medium text-sm text-gray-700 flex items-center
        "
    >
        <input
            type="checkbox" id="{{ $name }}" wire:model="{{ $name }}"
            class="
                rounded border-gray-300 text-indigo-600 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200
                focus:ring-opacity-50
            "
        />

        <span class="ml-2">{!! $label !!}</span>
    </label>
</div>

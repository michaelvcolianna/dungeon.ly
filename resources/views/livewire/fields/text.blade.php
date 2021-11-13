<div>
    <label for="{{ $field }}" class="block font-medium text-sm text-gray-700">
        {!! $label !!}
    </label>

    <input
        type="{{ $type }}" id="{{ $field }}"
        wire:model.debounce.500ms="{{ $field }}"
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
    />
</div>

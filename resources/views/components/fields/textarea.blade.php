<div {{ $attributes }}>
    <label for="{{ $field }}" class="block font-medium text-sm text-gray-700">
        {{ $label }}
    </label>

    <textarea
        id="{{ $field }}" rows="{{ $rows }}"
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full resize-none"
        wire:model.debounce.750ms="{{ $field }}"
    ></textarea>
</div>

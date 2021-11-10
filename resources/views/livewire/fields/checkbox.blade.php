<div>
    <label for="{{ $field }}" class="block font-medium text-sm text-gray-700 flex items-center">
        <input
            type="checkbox" id="{{ $field }}" wire:model="{{ $field }}"
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        />

        <span class="ml-2">{{ $label }}</span>
    </label>
</div>

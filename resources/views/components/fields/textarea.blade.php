@props(['name', 'label', 'rows' => 5])

<div>
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700">
        {!! $label !!}
    </label>

    <textarea
        id="{{ $name }}" wire:model.debounce.750ms="{{ $name }}"
        rows="{{ $rows }}" class="
            border-gray-300 focus:border-indigo-300 focus:ring
            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm
            w-full resize-none
        "
    ></textarea>
</div>

@props(['id', 'label', 'rows' => 5])

<div>
    <x-jet-label for="{{ $id }}">{!! $label !!}</x-jet-label>
    <textarea id="{{ $id }}" wire:model.debounce.750ms="{{ $id }}" rows="{{ $rows }}" {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}></textarea>
</div>

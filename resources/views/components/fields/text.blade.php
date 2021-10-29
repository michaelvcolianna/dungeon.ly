@props(['id', 'label', 'type' => 'text'])

<div>
    <x-jet-label for="{{ $id }}">{!! $label !!}</x-jet-label>
    <x-jet-input type="{{ $type }}" id="{{ $id }}" wire:model.debounce.500ms="{{ $id }}" />
</div>

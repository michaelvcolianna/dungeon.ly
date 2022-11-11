@props(['model', 'label'])

<div {{ $attributes }}>
    <label class="flex gap-2">
        <x-jet-checkbox rel="field" :id="$model" :wire:model="$model" />
        <span class="block font-medium text-sm text-gray-700">{{ $label }}</span>
    </label>
</div>

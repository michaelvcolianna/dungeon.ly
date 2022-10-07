<div class="grid grid-cols-1 gap-6" id="{{ $domId }}">
    <label class="block">
        <span class="block font-medium text-sm text-gray-700">{{ $label }}</span>
        <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" wire:model="{{ $model }}"></textarea>
    </label>
</div>

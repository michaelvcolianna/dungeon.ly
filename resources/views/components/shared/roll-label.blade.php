@props(['label', 'method' => 'roll'])

<button class="flex items-center gap-2 font-medium text-sm text-gray-700 sm:col-span-2" wire:click="{{ $method }}">
    <span class="order-2">{{ $label }}</span>

    <x-svg.d6 class="order-1 h-4 w-4" />
</button>

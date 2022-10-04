<div class="block mt-5">
    <label for="{{ $name }}" class="flex items-center">
        <input type="checkbox" id="{{ $name }}" wire:click="toggleObject" {{ $attributes}} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />

        <span class="ml-2 text-sm text-gray-600">{{ $label }}</span>
    </label>
</div>

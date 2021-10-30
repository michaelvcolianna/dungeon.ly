@props(['details' => null])

<details {{ $attributes->merge(['class' => 'bg-white sm:rounded-md shadow-md']) }}>
    <summary class="cursor-pointer flex items-center font-bold p-4 relative">
        <span class="text-lg">
            {!! $summary !!}
        </span>

        <x-svg.caret class="ml-auto transition-transform" />
    </summary>

    <div class="border-t p-4">
        {{ $details ?? $slot }}
    </div>
</details>

@props(['header', 'details' => null])

<details
    x-data="{ open: {{ $alpineOpen }} }" {{ $openStatus }}
    {{ $attributes->merge(['class' => 'bg-white sm:rounded-md shadow-md']) }}
>
    <summary
        class="cursor-pointer p-4 flex items-center"
        @click="open = ! open"
    >
        <span class="transition-transform transform" :class="{ 'rotate-90': open }">
            <x-svg.caret />
        </span>

        <span class="ml-2 font-bold text-lg">{!! $header !!}</span>
    </summary>

    <div class="border-t p-4">
        {{ $details ?? $slot }}
    </div>
</details>

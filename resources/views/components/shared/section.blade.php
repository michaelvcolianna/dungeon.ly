@props(['header'])

<div {{ $attributes->merge(['class' => 'bg-white sm:rounded-md shadow-md']) }}>
    <div class="font-bold text-lg p-4">
        {!! $header !!}
    </div>

    <div class="border-t p-4">
        {{ $details ?? $slot }}
    </div>
</div>

@props(['details' => null])

<section {{ $attributes->merge(['class' => 'bg-white sm:rounded-md shadow-md']) }}>
    <div class="font-bold p-4 text-lg">
        {!! $header !!}
    </div>

    <div class="border-t p-4">
        {{ $details ?? $slot }}
    </div>
</section>

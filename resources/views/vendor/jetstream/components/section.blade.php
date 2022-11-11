<div {{ $attributes->merge(['class' => 'px-4 xs:px-0'])}}>
    <h3 class="font-bold text-lg">{{ $title }}</h3>

    @if(isset($description))
        {{ $description }}
    @endif

    {{ $slot }}
</div>

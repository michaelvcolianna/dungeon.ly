<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $label ?? $slot }}
</a>

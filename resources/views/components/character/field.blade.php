<div>
    @if($structure())
        <x-dynamic-component
            component="character.{{ $template() }}" field="{{ $name }}"
        />
    @else
        <livewire:dynamic-component
            :component="$component()" :field="$name" :label="$label()"
            :rows="$rows()"
        />
    @endif
</div>

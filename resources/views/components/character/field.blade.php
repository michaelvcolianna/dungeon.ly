<div>
    @if($isSimple())
        <livewire:dynamic-component
            :component="$component()" :field="$name" :label="$label()"
            :rows="$rows()"
        />
    @elseif($isGrouped())
        @foreach($groups() as $group)
            <div class="font-medium text-sm text-gray-700">
                {{ $label() }} {{ $label(null, $group) }}
            </div>

            @foreach($structure() as $field => $options)
                <div wire:key="{{ $name }}.{{ $group }}.{{ $field }}">
                    <livewire:dynamic-component
                        :component="$component($options['template'] ?? 'text')"
                        field="{{ $name }}.{{ $group }}.{{ $field }}"
                        :label="$label($options['label'] ?? null, $field)"
                        :rows="$options['rows'] ?? 5"
                    />
                </div>
            @endforeach
        @endforeach
    @else
        <div class="font-medium text-sm text-gray-700">
            {{ $label() }}

            @if($attribute())
                <span class="text-gray-500">({{ $attribute() }})</span>
            @endif
        </div>

        @foreach($structure() as $field => $options)
            <div wire:key="{{ $name }}.{{ $field }}">
                <livewire:dynamic-component
                    :component="$component($options['template'] ?? 'text')"
                    field="{{ $name }}.{{ $field }}"
                    :label="$label($options['label'] ?? null, $field)"
                    :rows="$options['rows'] ?? 5"
                />
            </div>
        @endforeach
    @endif
</div>

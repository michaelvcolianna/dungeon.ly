<div class="grid grid-cols-2 gap-6 items-center">
    <span class="block font-medium text-sm text-gray-700">Death Save {{ $config['label'] }}</span>

    <div class="grid grid-cols-3 gap-3">
        @for($i = 0; $i < $config['count']; $i++)
            <livewire:form.death-save-field :kind="$config['kind']" :number="$i" wire:key="death-save-{{ $config['kind'] }}-{{ $i }}" />
        @endfor
    </div>
</div>

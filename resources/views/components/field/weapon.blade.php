<div class="grid grid-cols-1 gap-6">
    @for($i = 0; $i < $config['count']; $i++)
        <livewire:form.weapon-field :number="$i" wire:key="weapon-{{ $i }}" />
    @endfor
</div>

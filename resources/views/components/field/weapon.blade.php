<div class="grid grid-cols-1 gap-6">
    @for($i = 0; $i < 3; $i++)
        <livewire:form.weapon-field :number="$i" wire:key="weapon-{{ $i }}" />

        @if($i < 2)
            <hr />
        @endif
    @endfor
</div>

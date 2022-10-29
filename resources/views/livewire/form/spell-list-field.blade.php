<div class="grid grid-cols-1 gap-6" wire:ignore>
    <x-form.field type="text" label="Cantrips" model="spell_list.cantrips" group="magic" name="cantrips" />

    <hr />

    @for($i = 1; $i < 10; $i++)
        <div class="font-bold">Spell Level {{ $i }}</div>

        <livewire:form.spell-level-field :number="$i" wire:key="group-spell-level-{{ $i }}" />

        @if($i < 9)
            <hr />
        @endif
    @endfor
</div>

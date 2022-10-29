<div class="grid grid-cols-1 gap-6" id="magic-spell_level_{{ $spell_level->number }}" wire:ignore>
    <div class="grid grid-cols-2 gap-6">
        <x-form.field type="string" label="Slots Total" model="spell_level.slots_total" />
        <x-form.field type="string" label="Slots Expended" model="spell_level.slots_expended" />
    </div>

    <x-form.field type="text" label="Spells" model="spell_level.spells" />
</div>

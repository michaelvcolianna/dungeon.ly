<div>
    <x-fields.textarea
        name="character.spells.0" label="Cantrips" rows="8"
        wire:key="spell-level-0-spells"
    />

    @foreach(range(1, 9) as $level)
        <div wire:key="spell-level-{{ $level }}">
            <div class="block font-medium text-sm text-gray-700">
                Spell Level <span class="text-black">{{ $level }}</span>
            </div>

            <x-fields.text
                name="character.spell_levels.{{ $level }}.slots_total"
                label="Slots Total"
                wire:key="spell-level-{{ $level }}-slots-total"
            />

            <x-fields.text
                name="character.spell_levels.{{ $level }}.slots_expended"
                label="Slots Expended"
                wire:key="spell-level-{{ $level }}-slots-expended"
            />
            <x-fields.textarea
                name="character.spells.{{ $level }}" rows="8"
                label="Spells (Prepared / Name / Description)"
                wire:key="spell-level-{{ $level }}-spells"
            />
        </div>
    @endforeach
</div>

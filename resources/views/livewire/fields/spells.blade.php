<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="grid grid-cols-1 gap-4 self-start">
        <div class="block font-bold text-lg text-gray-700">
            Cantrips
        </div>

        <x-fields.textarea
            name="character.spells.0" label="List" rows="5"
        />
    </div>

    @for($i = 1; $i < 10; $i++)
        <div class="grid grid-cols-1 gap-4">
            <div class="block font-bold text-lg text-gray-700">
                Spell Level {{ $i }}
            </div>

            <div class="grid grid-cols-2 gap-4">
                <x-fields.text
                    name="character.spell_levels.{{ $i }}.slots_total"
                    label="Slots Total"
                />

                <x-fields.text
                    name="character.spell_levels.{{ $i }}.slots_expended"
                    label="Slots Expended"
                />
            </div>

            <x-fields.textarea
                name="character.spells.{{ $i }}" rows="5"
                label="List (Prepared / Name / Description)"
            />
        </div>
    @endfor
</div>

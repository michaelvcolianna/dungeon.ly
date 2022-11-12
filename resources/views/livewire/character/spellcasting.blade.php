<div class="grid gap-4 grid-cols-2 sm:grid-cols-4">
    <x-jet-field.string model="character.spellcasting_class" label="Spellcasting Class" />
    <x-jet-field.string model="character.spellcasting_ability" label="Spellcasting Ability" />
    <x-jet-field.string model="character.spell_save_dc" label="Spell Save DC" />

    <div data-field-label="Spell Attack Bonus">
        <x-jet-label for="character.spell_attack_bonus">
            <x-shared.roll-label label="Spell Attack Bonus" method="rollSpellAttack" />
        </x-jet-label>

        <x-jet-input id="character.spell_attack_bonus" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="character.spell_attack_bonus" />
    </div>

    <x-jet-field.text model="character.cantrips" label="Cantrips" :value="$character->cantrips" class="col-span-full" />
</div>

<div class="grid gap-4 grid-cols-2 sm:grid-cols-4">
    <x-jet-field.string model="character.spellcasting_class" label="Spellcasting Class" />
    <x-jet-field.string model="character.spellcasting_ability" label="Spellcasting Ability" />
    <x-jet-field.string model="character.spell_save_dc" label="Spell Save DC" />
    <x-jet-field.string model="character.spell_attack_bonus" label="Spell Attack Bonus" />
    <x-jet-field.text model="character.cantrips" label="Cantrips" :value="$character->cantrips" class="col-span-full" />
</div>

<div class="grid gap-4 grid-cols-2 xs:grid-cols-3">
    <x-jet-field.string model="character.armor_class" label="Armor Class" />
    <x-jet-field.string model="character.initiative" label="Initiative" />
    <x-jet-field.string model="character.speed" label="Speed" class="col-start-1 xs:col-start-auto" />
    <x-jet-field.string model="character.hit_point_maximum" label="Hit Point Maximum" class="col-start-1 xs:col-start-auto" />
    <x-jet-field.text model="character.current_hit_points" label="Current Hit Points" :value="$character->current_hit_points" class="col-start-1 xs:col-start-auto" />
    <x-jet-field.text model="character.temporary_hit_points" label="Temporary Hit Points" :value="$character->temporary_hit_points" />
    <x-jet-field.string model="character.hit_dice_total" label="Hit Dice Total" />
    <x-jet-field.text model="character.hit_dice_type" label="Hit Dice Type" :value="$character->hit_dice_type" />
    <x-jet-field.text model="character.attacks_spellcasting_notes" label="Attacks & Spellcasting Notes" :value="$character->attacks_spellcasting_notes" class="col-span-full" />
</div>

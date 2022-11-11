<div class="grid gap-4 grid-cols-3 sm:grid-cols-5">
    <x-jet-field.string model="character.cp" label="CP" />
    <x-jet-field.string model="character.sp" label="SP" />
    <x-jet-field.string model="character.ep" label="EP" />
    <x-jet-field.string model="character.gp" label="GP" />
    <x-jet-field.string model="character.pp" label="PP" />
    <x-jet-field.text model="character.equipment" label="Equipment" :value="$character->equipment" class="col-span-full" />
    <x-jet-field.text model="character.treasure" label="Treasure" :value="$character->treasure" class="col-span-full" />
</div>

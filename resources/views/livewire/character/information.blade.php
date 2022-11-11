<div class="grid gap-4 grid-cols-2 sm:grid-cols-4">
    <div class="col-span-full md:col-span-1 lg:col-span-2">
        <x-jet-label for="null-game" value="Game" />
        <x-jet-input id="null-game" disabled class="block mt-1 w-full" type="text" :value="$character->team->name" />
    </div>

    <x-jet-field.string model="character.name" label="Name" class="col-span-full sm:col-span-2 md:col-span-1 md:col-start-1" />
    <x-jet-field.string model="character.class_level" label="Class & Level" class="col-span-full sm:col-span-2 md:col-span-1 md:col-start-1 lg:col-start-auto" />
    <x-jet-field.string model="character.race" label="Race" class="col-span-full sm:col-span-2 md:col-span-2 md:col-start-1 lg:col-span-1 lg:col-start-1" />
    <x-jet-field.string model="character.alignment" label="Alignment" class="col-span-full sm:col-span-2 lg:col-span-1 lg:col-start-auto" />
    <x-jet-field.string model="character.experience_points" label="Experience Points" class="lg:col-span-1 lg:col-start-1" />
    <x-jet-field.string model="character.inspiration" label="Inspiration" />
    <x-jet-field.string model="character.age" label="Age" />
    <x-jet-field.string model="character.height" label="Height" />
    <x-jet-field.string model="character.weight" label="Weight" />
    <x-jet-field.string model="character.eyes" label="Eyes" />
    <x-jet-field.string model="character.skin" label="Skin" />
    <x-jet-field.string model="character.hair" label="Hair" />
    <x-jet-field.text model="character.personality_traits" label="Personality Traits" :value="$character->personality_traits" class="col-span-full" />
    <x-jet-field.text model="character.ideals" label="Ideals" :value="$character->ideals" class="col-span-full" />
    <x-jet-field.text model="character.bonds" label="Bonds" :value="$character->bonds" class="col-span-full" />
    <x-jet-field.text model="character.flaws" label="Flaws" :value="$character->flaws" class="col-span-full" />
    <x-jet-field.text model="character.other_proficiencies_languages" label="Other Proficiencies & Languages" :value="$character->other_proficiencies_languages" class="col-span-full" />
    <x-jet-field.text model="character.features_traits" label="Features & Traits" :value="$character->features_traits" class="col-span-full" />
    <x-jet-field.text model="character.character_appearance" label="Character Appearance" :value="$character->character_appearance" class="col-span-full" />
    <x-jet-field.text model="character.character_backstory" label="Character Backstory" :value="$character->character_backstory" class="col-span-full" />
    <x-jet-field.text model="character.allies_organizations" label="Allies & Organizations" :value="$character->allies_organizations" class="col-span-full" />
    <x-jet-field.string model="character.group_name" label="Group Name" class="col-span-full sm:col-span-2 md:col-span-1" />
</div>

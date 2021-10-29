<x-jet-action-section>
    <x-slot name="title">
        Character Details
    </x-slot>

    <x-slot name="description">
        General information about the character.
    </x-slot>

    <x-slot name="content">
        <div>
            <x-fields.text id="character.name" label="Name" />
            <x-fields.text id="character.class_level" label="Class & Level" />
            <x-fields.text id="character.background" label="Background" />
            <x-fields.text id="character.race" label="Race" />
            <x-fields.text id="character.alignment" label="Alignment" />
            <x-fields.text id="character.experience_points" label="Experience Points" />
            <x-fields.text id="character.age" label="Age" />
            <x-fields.text id="character.height" label="Height" />
            <x-fields.text id="character.weight" label="Weight" />
            <x-fields.text id="character.eyes" label="Eyes" />
            <x-fields.text id="character.skin" label="Skin" />
            <x-fields.text id="character.hair" label="Hair" />
            <x-fields.textarea id="character.personality_traits" label="Personality Traits" />
            <x-fields.textarea id="character.ideals" label="Ideals" />
            <x-fields.textarea id="character.bonds" label="Bonds" />
            <x-fields.textarea id="character.flaws" label="Flaws" />
            <x-fields.textarea id="character.other_proficiencies_languages" label="Other Proficiencies & Languages" rows="10" />
            <x-fields.textarea id="character.features_traits" label="Features & Traits" rows="25" />
            <x-fields.text id="character.appearance" label="Appearance" />
            <x-fields.textarea id="character.allies_organizations" label="Allies & Organizations" rows="10" />
            <x-fields.text id="character.affiliation" label="Group Affiliation" />
            <x-fields.text id="character.symbol" label="Symbol" />
            <x-fields.textarea id="character.backstory" label="Backstory" rows="25" />
            <x-fields.textarea id="character.additional_features_traits" label="Additional Features & Traits" rows="10" />
        </div>
    </x-slot>
</x-jet-action-section>

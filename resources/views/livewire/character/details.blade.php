<x-shared.collapsible-section summary="Character Details">
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
        <div class="sm:grid grid-cols-2 gap-4 xl:col-span-2">
            <div class="flex justify-center sm:order-2 xl:order-1">
                <x-fields.file-upload field="appearance" label="Appearance" :character="$character" />
            </div>

            <div class="sm:order-1 xl:order-2 mt-4 sm:mt-0">
                <x-fields.text field="character.name" label="Name" class="mb-4" />
                <x-fields.text field="character.class_level" label="Class & Level" />
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-2 gap-4">
            <x-fields.text field="character.background" label="Background" />
            <x-fields.text field="character.race" label="Race" />
            <x-fields.text field="character.alignment" label="Alignment" />
            <x-fields.text field="character.experience_points" label="Experience Points" />
            <x-fields.text field="character.age" label="Age" class="md:col-start-2 lg:col-auto" />
            <x-fields.text field="character.height" label="Height" />
            <x-fields.text field="character.weight" label="Weight" />
            <x-fields.text field="character.eyes" label="Eyes" class="md:col-start-2 lg:col-auto" />
            <x-fields.text field="character.skin" label="Skin" />
            <x-fields.text field="character.hair" label="Hair" />
        </div>

        <div class="md:grid grid-cols-2 gap-4 xl:col-span-2">
            <x-fields.textarea field="character.personality_traits" label="Personality Traits" />
            <x-fields.textarea field="character.ideals" label="Ideals" />
            <x-fields.textarea field="character.bonds" label="Bonds" />
            <x-fields.textarea field="character.flaws" label="Flaws" />
            <x-fields.textarea field="character.backstory" label="Backstory" rows="25" />
            <x-fields.textarea field="character.features_traits" label="Features & Traits" rows="25" />
            <x-fields.textarea field="character.other_proficiencies_languages" label="Other Proficiencies & Languages" rows="10" />
            <x-fields.textarea field="character.additional_features_traits" label="Additional Features & Traits" rows="10" />
        </div>

        <div class="sm:grid grid-cols-2 gap-4 xl:block">
            <div class="mb-4">
                <x-fields.text field="character.affiliation" label="Group Affiliation" class="mb-4" />
                <x-fields.file-upload field="symbol" label="Symbol" :character="$character" />
            </div>

            <x-fields.textarea field="character.allies_organizations" label="Allies & Organizations" rows="12" id="allies_organizations" />
        </div>
    </div>
</x-shared.collapsible-section>

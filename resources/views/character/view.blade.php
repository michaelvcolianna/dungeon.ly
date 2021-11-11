<x-app-layout>
    <x-slot name="header">
        <livewire:character.header />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4">
                <x-shared.section>
                    <x-slot name="header">
                        Images
                    </x-slot>

                    <livewire:fields.file-upload field="character.appearance" label="Appearance" />
                    <livewire:fields.file-upload field="character.symbol" label="Group Symbol" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Details
                    </x-slot>

                    <livewire:fields.text field="character.name" label="Name" />
                    <livewire:fields.text field="character.class_level" label="Class & Level" />
                    <livewire:fields.text field="character.background" label="Background" />
                    <livewire:fields.text field="character.race" label="Race" />
                    <livewire:fields.text field="character.alignment" label="Alignment" />
                    <livewire:fields.text field="character.experience_points" label="Experience Points" />
                    <livewire:fields.textarea field="character.features_traits" label="Features & Traits" />
                    <livewire:fields.textarea field="character.other_proficiencies_languages" label="Other Proficiencies & Languages" />
                    <livewire:fields.textarea field="character.additional_features_traits" label="Additional Features & Traits" />
                    <livewire:fields.text field="character.affiliation" label="Group Affiliation" />
                    <livewire:fields.textarea field="character.allies_organizations" label="Allies & Organizations" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Biographical
                    </x-slot>

                    <livewire:fields.text field="character.age" label="Age" class="md:col-start-2 lg:col-auto" />
                    <livewire:fields.text field="character.height" label="Height" />
                    <livewire:fields.text field="character.weight" label="Weight" />
                    <livewire:fields.text field="character.eyes" label="Eyes" class="md:col-start-2 lg:col-auto" />
                    <livewire:fields.text field="character.skin" label="Skin" />
                    <livewire:fields.text field="character.hair" label="Hair" />
                    <livewire:fields.textarea field="character.personality_traits" label="Personality Traits" />
                    <livewire:fields.textarea field="character.ideals" label="Ideals" />
                    <livewire:fields.textarea field="character.bonds" label="Bonds" />
                    <livewire:fields.textarea field="character.flaws" label="Flaws" />
                    <livewire:fields.textarea field="character.backstory" label="Backstory" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Stats
                    </x-slot>

                    <x-character.attribute field="character.strength" label="Strength" />
                    <x-character.attribute field="character.dexterity" label="Dexterity" />
                    <x-character.attribute field="character.constitution" label="Constitution" />
                    <x-character.attribute field="character.intelligence" label="Intelligence" />
                    <x-character.attribute field="character.wisdom" label="Wisdom" />
                    <x-character.attribute field="character.charisma" label="Charisma" />

                    <livewire:fields.text field="character.inspiration" label="Inspiration" />
                    <livewire:fields.text field="character.proficiency_bonus" label="Proficiency Bonus" />
                    <livewire:fields.text field="character.passive_wisdom" label="Passive Wisdom (Perception)" />
                    <livewire:fields.text field="character.armor_class" label="Armor Class" />
                    <livewire:fields.text field="character.initiative" label="Initiative" />
                    <livewire:fields.text field="character.speed" label="Speed" />

                    <div>
                        <livewire:fields.text field="character.hit_points.maximum" label="Hit Point Maximum" />
                        <livewire:fields.textarea field="character.hit_points.current" label="Current Hit Points" />
                        <livewire:fields.textarea field="character.hit_points.temporary" label="Temporary Hit Points" />
                    </div>

                    <div>
                        <livewire:fields.text field="character.hit_dice.total" label="Hit Dice Total" />
                        <livewire:fields.textarea field="character.hit_dice.value" label="Hit Dice" />
                    </div>

                    <livewire:character.death-saves />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Skills
                    </x-slot>

                    <x-character.skill field="character.acrobatics" label="Acrobatics" attribute="Dex" />
                    <x-character.skill field="character.animal_handling" label="Animal Handling" attribute="Wis" />
                    <x-character.skill field="character.arcana" label="Arcana" attribute="Int" />
                    <x-character.skill field="character.athletics" label="Athletics" attribute="Str" />
                    <x-character.skill field="character.deception" label="Deception" attribute="Cha" />
                    <x-character.skill field="character.history" label="History" attribute="Int" />
                    <x-character.skill field="character.insight" label="Insight" attribute="Wis" />
                    <x-character.skill field="character.intimidation" label="Intimidation" attribute="Cha" />
                    <x-character.skill field="character.investigation" label="Investigation" attribute="Int" />
                    <x-character.skill field="character.medicine" label="Medicine" attribute="Wis" />
                    <x-character.skill field="character.nature" label="Nature" attribute="Int" />
                    <x-character.skill field="character.perception" label="Perception" attribute="Wis" />
                    <x-character.skill field="character.performance" label="Performance" attribute="Cha" />
                    <x-character.skill field="character.persuasion" label="Persuasion" attribute="Cha" />
                    <x-character.skill field="character.religion" label="Religion" attribute="Int" />
                    <x-character.skill field="character.sleight_of_hand" label="Sleight of Hand" attribute="Dex" />
                    <x-character.skill field="character.stealth" label="Stealth" attribute="Dex" />
                    <x-character.skill field="character.survival" label="Survival" attribute="Wis" />
                </x-shared.section>
            </div>
        </div>
    </div>
</x-app-layout>

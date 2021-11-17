<x-app-layout>
    <x-slot name="header">
        <livewire:character.header />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-md shadow-md p-4 grid grid-cols-1 gap-4">
                <div class="block font-bold text-lg text-gray-700">
                    Information
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <livewire:fields.file-upload name="character.appearance" label="Appearance" />

                    <div class="col-span-2 grid grid-cols-1 gap-4 md:flex flex-col justify-between">
                        <livewire:fields.text name="character.name" label="Name" />
                        <livewire:fields.text name="character.class_level" label="Class & Level" />
                        <livewire:fields.text name="character.experience_points" label="Experience Points" />
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <livewire:fields.text name="character.background" label="Background" />
                    <livewire:fields.text name="character.race" label="Race" />
                    <livewire:fields.text name="character.alignment" label="Alignment" />
                    <livewire:fields.text name="character.inspiration" label="Inspiration" />
                    <livewire:fields.text name="character.age" label="Age" />
                    <livewire:fields.text name="character.height" label="Height" />
                    <livewire:fields.text name="character.weight" label="Weight" />
                    <livewire:fields.text name="character.eyes" label="Eyes" />
                    <livewire:fields.text name="character.skin" label="Skin" />
                    <livewire:fields.text name="character.hair" label="Hair" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="grid grid-cols-1 gap-4">
                        <livewire:fields.file-upload name="character.symbol" label="Group Symbol" />
                        <livewire:fields.text name="character.affiliation" label="Group Affiliation" />
                        <livewire:fields.textarea name="character.allies_organizations" label="Allies & Organizations" rows="10" />
                    </div>

                    <div class="md:flex flex-col justify-end">
                        <livewire:fields.textarea name="character.features_traits" label="Features & Traits" rows="20" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <livewire:fields.textarea name="character.additional_features_traits" label="Additional Features & Traits" rows="10" />
                    <livewire:fields.textarea name="character.other_proficiencies_languages" label="Other Proficiencies & Languages" rows="10" />
                </div>

                <livewire:fields.textarea name="character.backstory" label="Backstory" rows="20" />

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <livewire:fields.textarea name="character.personality_traits" label="Personality Traits" />
                    <livewire:fields.textarea name="character.ideals" label="Ideals" />
                    <livewire:fields.textarea name="character.bonds" label="Bonds" />
                    <livewire:fields.textarea name="character.flaws" label="Flaws" />
                </div>

                <div class="block font-bold text-lg text-gray-700">
                    Attributes
                </div>

                <div class="grid grid-cols-1 md:grid-cols-none md:grid-rows-3 md:grid-flow-col gap-4">
                    <livewire:fields.attribute name="character.strength" label="Strength" />
                    <livewire:fields.attribute name="character.dexterity" label="Dexterity" />
                    <livewire:fields.attribute name="character.constitution" label="Constitution" />
                    <livewire:fields.attribute name="character.intelligence" label="Intelligence" />
                    <livewire:fields.attribute name="character.wisdom" label="Wisdom" />
                    <livewire:fields.attribute name="character.charisma" label="Charisma" />
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <livewire:fields.text name="character.proficiency_bonus" label="Proficiency Bonus" />
                    <livewire:fields.text name="character.passive_wisdom" label="Passive Wisdom (Perception)" />
                </div>

                <div class="block font-bold text-lg text-gray-700">
                    Skills
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <livewire:fields.skill name="character.acrobatics" label="Acrobatics" attribute="Dex" />
                    <livewire:fields.skill name="character.animal_handling" label="Animal Handling" attribute="Wis" />
                    <livewire:fields.skill name="character.arcana" label="Arcana" attribute="Int" />
                    <livewire:fields.skill name="character.athletics" label="Athletic" attribute="Str" />
                    <livewire:fields.skill name="character.deception" label="Deception" attribute="Cha" />
                    <livewire:fields.skill name="character.history" label="History" attribute="Int" />
                    <livewire:fields.skill name="character.insight" label="Insight" attribute="Wist" />
                    <livewire:fields.skill name="character.intimidation" label="Intimidation" attribute="Cha" />
                    <livewire:fields.skill name="character.investigation" label="Investigation" attribute="Int" />
                    <livewire:fields.skill name="character.medicine" label="Medicine" attribute="Wis" />
                    <livewire:fields.skill name="character.nature" label="Nature" attribute="Int" />
                    <livewire:fields.skill name="character.perception" label="Perception" attribute="Wis" />
                    <livewire:fields.skill name="character.performance" label="Performance" attribute="Cha" />
                    <livewire:fields.skill name="character.persuasion" label="Persuasion" attribute="Cha" />
                    <livewire:fields.skill name="character.religion" label="Religion" attribute="Int" />
                    <livewire:fields.skill name="character.sleight_of_hand" label="Sleight of Hand" attribute="Dex" />
                    <livewire:fields.skill name="character.stealth" label="Stealth" attribute="Dex" />
                    <livewire:fields.skill name="character.survival" label="Survival" attribute="Wis" />
                </div>

                <div class="block font-bold text-lg text-gray-700">
                    Combat
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <livewire:fields.text name="character.armor_class" label="Armor Class" />
                    <livewire:fields.text name="character.initiative" label="Initiative" />
                    <livewire:fields.text name="character.speed" label="Speed" />
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <livewire:fields.hit-points name="character.hit_points" label="Hit Points" />
                    </div>

                    <div>
                        <livewire:fields.hit-dice name="character.hit_dice" label="Hit Dice" />
                        <livewire:fields.death-saves name="character.death_saves" label="Death Saves" />
                    </div>

                    <div class="col-span-2">
                        <livewire:fields.textarea name="character.attacks_spellcasting" label="Attacks & Spellcasting" rows="10" />
                    </div>
                </div>

                <div class="block font-bold text-lg text-gray-700">
                    Weapons
                </div>

                <livewire:fields.weapons name="character.weapons" label="Weapons" />

                <div class="block font-bold text-lg text-gray-700">
                    Gear
                </div>

                <livewire:fields.money name="character.money" label="Money" />

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <livewire:fields.textarea name="character.equipment" label="Equipment" rows="10" />
                    <livewire:fields.textarea name="character.treasure" label="Treasure" rows="10" />
                </div>

                <div class="block font-bold text-lg text-gray-700">
                    Magic
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <livewire:fields.text name="character.spellcasting_class" label="Spellcasting Class" />
                    <livewire:fields.text name="character.spellcasting_ability" label="Spellcasting Ability" />
                    <livewire:fields.text name="character.spell_save_dc" label="Spell Save DC" />
                    <livewire:fields.text name="character.spell_attack_bonus" label="Spell Attack Bonus" />
                </div>

                <livewire:fields.spells />
            </div>
        </div>
    </div>
</x-app-layout>

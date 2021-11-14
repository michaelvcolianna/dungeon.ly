<x-app-layout>
    <x-slot name="header">
        <livewire:character.header />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4">
                <x-shared.section>
                    <x-slot name="header">
                        Details
                    </x-slot>

                    <x-character.field name="character.name" />
                    <x-character.field name="character.class_level" />
                    <x-character.field name="character.background" />
                    <x-character.field name="character.race" />
                    <x-character.field name="character.alignment" />
                    <x-character.field name="character.experience_points" />
                    <x-character.field name="character.features_traits" />
                    <x-character.field name="character.additional_features_traits" />
                    <x-character.field name="character.other_proficiencies_languages" />
                    <x-character.field name="character.affiliation" />
                    <x-character.field name="character.allies_organizations" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Biographical
                    </x-slot>

                    <x-character.field name="character.age" />
                    <x-character.field name="character.height" />
                    <x-character.field name="character.weight" />
                    <x-character.field name="character.eyes" />
                    <x-character.field name="character.skin" />
                    <x-character.field name="character.hair" />
                    <x-character.field name="character.personality_traits" />
                    <x-character.field name="character.ideals" />
                    <x-character.field name="character.bonds" />
                    <x-character.field name="character.flaws" />
                    <x-character.field name="character.backstory" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Stats
                    </x-slot>

                    <x-character.field name="character.strength" />
                    <x-character.field name="character.dexterity" />
                    <x-character.field name="character.constitution" />
                    <x-character.field name="character.intelligence" />
                    <x-character.field name="character.wisdom" />
                    <x-character.field name="character.charisma" />
                    <x-character.field name="character.inspiration" />
                    <x-character.field name="character.proficiency_bonus" />
                    <x-character.field name="character.passive_wisdom" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Skills
                    </x-slot>

                    <x-character.field name="character.acrobatics" />
                    <x-character.field name="character.animal_handling" />
                    <x-character.field name="character.arcana" />
                    <x-character.field name="character.athletics" />
                    <x-character.field name="character.deception" />
                    <x-character.field name="character.history" />
                    <x-character.field name="character.insight" />
                    <x-character.field name="character.intimidation" />
                    <x-character.field name="character.investigation" />
                    <x-character.field name="character.medicine" />
                    <x-character.field name="character.nature" />
                    <x-character.field name="character.perception" />
                    <x-character.field name="character.performance" />
                    <x-character.field name="character.persuasion" />
                    <x-character.field name="character.religion" />
                    <x-character.field name="character.sleight_of_hand" />
                    <x-character.field name="character.stealth" />
                    <x-character.field name="character.survival" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Combat
                    </x-slot>

                    <x-character.field name="character.armor_class" />
                    <x-character.field name="character.initiative" />
                    <x-character.field name="character.speed" />
                    <x-character.field name="character.hit_points" />
                    <x-character.field name="character.hit_dice" />
                    <x-character.field name="character.death_saves" />
                    <x-character.field name="character.weapons" />
                    <x-character.field name="character.attacks_spellcasting" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Magic
                    </x-slot>

                    <x-character.field name="character.spellcasting_class" />
                    <x-character.field name="character.spellcasting_ability" />
                    <x-character.field name="character.spell_save_dc" />
                    <x-character.field name="character.spell_attack_bonus" />
                    {{-- @note Call these two via special template --}}
                    {{-- <x-character.field name="character.spell_levels" /> --}}
                    {{-- <x-character.field name="character.spells" /> --}}
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Gear
                    </x-slot>

                    <x-character.field name="character.money" />
                    <x-character.field name="character.equipment" />
                    <x-character.field name="character.treasure" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Images
                    </x-slot>

                    <x-character.field name="character.appearance" />
                    <x-character.field name="character.symbol" />
                </x-shared.section>
            </div>
        </div>
    </div>
</x-app-layout>

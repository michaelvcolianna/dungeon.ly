<?php

namespace App\Traits;

use App\Models\Character;

trait HasACharacter
{
    /**
     * Character sheet field definitions.
     *
     * @var string[]
     */
    public $fields = [
        'character.name',
        'character.class_level',
        'character.background',
        'character.race',
        'character.alignment',
        'character.experience_points',
        'character.age',
        'character.height',
        'character.weight',
        'character.eyes',
        'character.skin',
        'character.hair',
        'character.personality_traits',
        'character.ideals',
        'character.bonds',
        'character.flaws',
        'character.features_traits',
        'character.appearance',
        'character.allies_organizations',
        'character.affiliation',
        'character.symbol',
        'character.backstory',
        'character.additional_features_traits',
        'character.strength',
        'character.dexterity',
        'character.constitution',
        'character.intelligence',
        'character.wisdom',
        'character.charisma',
        'character.passive_wisdom',
        'character.other_proficiencies_languages',
        'character.inspiration',
        'character.proficiency_bonus',
        'character.strength_saving_throw',
        'character.dexterity_saving_throw',
        'character.constitution_saving_throw',
        'character.intelligence_saving_throw',
        'character.wisdom_saving_throw',
        'character.charisma_saving_throw',
        'character.armor_class',
        'character.initiative',
        'character.speed',
        'character.hit_points',
        'character.hit_dice',
        'character.death_save_successes',
        'character.death_save_failures',
        'character.spellcasting_class',
        'character.spellcasting_ability',
        'character.spell_save_dc',
        'character.spell_attack_bonus',
        'character.spell_levels',
        'character.spells',
        'character.acrobatics',
        'character.animal_handling',
        'character.arcana',
        'character.athletics',
        'character.deception',
        'character.history',
        'character.insight',
        'character.intimidation',
        'character.investigation',
        'character.medicine',
        'character.nature',
        'character.perception',
        'character.performance',
        'character.persuasion',
        'character.religion',
        'character.sleight_of_hand',
        'character.stealth',
        'character.survival',
        'character.weapons',
        'character.attacks_spellcasting',
        'character.money',
        'character.equipment',
        'character.treasure',
    ];

    /**
     * The character.
     *
     * @var \App\Models\Character
     */
    public Character $character;

    /**
     * Retrieve a character by ID.
     *
     * @param  integer  $id
     * @return \App\Models\Character
     */
    protected function getCharacterById($id)
    {
        return Character::find($id);
    }
}

<?php

return [

    'characters' => [
        'parent' => 'User',
        'fields' => [
            'character_name' => [
                'type' => 'string',
            ],
            'class_level' => [
                'label' => 'Class & Level',
                'type' => 'string',
            ],
            'background' => [
                'type' => 'string',
            ],
            'race' => [
                'type' => 'string',
            ],
            'alignment' => [
                'type' => 'string',
            ],
            'experience_points' => [
                'type' => 'string',
            ],
            'age' => [
                'type' => 'string',
            ],
            'height' => [
                'type' => 'string',
            ],
            'weight' => [
                'type' => 'string',
            ],
            'eyes' => [
                'type' => 'string',
            ],
            'skin' => [
                'type' => 'string',
            ],
            'hair' => [
                'type' => 'string',
            ],
            'avatar_path' => [
                'label' => 'Avatar',
                'type' => 'image',
            ],
            'strength' => [
                'model' => 'Attribute',
            ],
            'dexerity' => [
                'model' => 'Attribute',
            ],
            'constitution' => [
                'model' => 'Attribute',
            ],
            'intelligence' => [
                'model' => 'Attribute',
            ],
            'wisdom' => [
                'model' => 'Attribute',
            ],
            'charisma' => [
                'model' => 'Attribute',
            ],
            'armor_class' => [
                'type' => 'string',
            ],
            'initiative' => [
                'type' => 'string',
            ],
            'speed' => [
                'type' => 'string',
            ],
            'inspiration' => [
                'type' => 'string',
            ],
            'proficiency_bonus' => [
                'type' => 'string',
            ],
            'passive_wisdom' => [
                'label' => 'Passive Wisdom (Perception)',
                'type' => 'string',
            ],
            'strength_save' => [
                'label' => 'Strength',
                'model' => 'SavingThrow',
            ],
            'dexterity_save' => [
                'label' => 'Dexterity',
                'model' => 'SavingThrow',
            ],
            'constitution_save' => [
                'label' => 'Constitution',
                'model' => 'SavingThrow',
            ],
            'intelligence_save' => [
                'label' => 'Intelligence',
                'model' => 'SavingThrow',
            ],
            'wisdom_save' => [
                'label' => 'Wisdom',
                'model' => 'SavingThrow',
            ],
            'charisma_save' => [
                'label' => 'Charisma',
                'model' => 'SavingThrow',
            ],
            'acrobatics' => [
                'model' => 'Skill',
                'attribute' => 'Dex',
            ],
            'animal_handling' => [
                'model' => 'Skill',
                'attribute' => 'Wis',
            ],
            'arcana' => [
                'model' => 'Skill',
                'attribute' => 'Int',
            ],
            'athletics' => [
                'model' => 'Skill',
                'attribute' => 'Str',
            ],
            'deception' => [
                'model' => 'Skill',
                'attribute' => 'Chat',
            ],
            'history' => [
                'model' => 'Skill',
                'attribute' => 'Int',
            ],
            'insight' => [
                'model' => 'Skill',
                'attribute' => 'Wis',
            ],
            'intimidation' => [
                'model' => 'Skill',
                'attribute' => 'Chat',
            ],
            'investigation' => [
                'model' => 'Skill',
                'attribute' => 'Int',
            ],
            'medicine' => [
                'model' => 'Skill',
                'attribute' => 'Wis',
            ],
            'nature' => [
                'model' => 'Skill',
                'attribute' => 'Int',
            ],
            'perception' => [
                'model' => 'Skill',
                'attribute' => 'Wis',
            ],
            'performance' => [
                'model' => 'Skill',
                'attribute' => 'Cha',
            ],
            'persuasion' => [
                'model' => 'Skill',
                'attribute' => 'Cha',
            ],
            'religion' => [
                'model' => 'Skill',
                'attribute' => 'Int',
            ],
            'sleight_hand' => [
                'label' => 'Sleight of Hand',
                'model' => 'Skill',
                'attribute' => 'Dex',
            ],
            'stealth' => [
                'model' => 'Skill',
                'attribute' => 'Dex',
            ],
            'survival' => [
                'model' => 'Skill',
                'attribute' => 'Wis',
            ],
            'hit_point_maximum' => [
                'type' => 'string',
            ],
            'current_hit_points' => [
                'type' => 'text',
            ],
            'temporary_hit_points' => [
                'type' => 'text',
            ],
            'hit_dice_total' => [
                'type' => 'string',
            ],
            'hit_dice_type' => [
                'type' => 'text',
            ],
            'death_save_successes' => [
                'type' => 'string',
            ],
            'death_save_failures' => [
                'type' => 'string',
            ],
            'weapons' => [
                'model' => 'Weapon',
                'multiple' => true,
            ],
            'attacks_spellcasting_notes' => [
                'label' => 'Attacks & Spellcasting Notes',
                'type' => 'text',
            ],
            'personality_traits' => [
                'type' => 'text',
            ],
            'ideals' => [
                'type' => 'text',
            ],
            'bonds' => [
                'type' => 'text',
            ],
            'flaws' => [
                'type' => 'text',
            ],
            'features_traits' => [
                'label' => 'Features & Traits',
                'type' => 'text',
            ],
            'other_proficiencies_languages' => [
                'label' => 'Other Proficiencies & Languages',
                'type' => 'text',
            ],
            'character_appearance' => [
                'type' => 'text',
            ],
            'allies_organizations' => [
                'label' => 'Allies & Organizations',
                'type' => 'text',
            ],
            'group_name' => [
                'type' => 'string',
            ],
            'group_symbol_path' => [
                'label' => 'Group Symbol',
                'type' => 'image',
            ],
            'character_backstory' => [
                'type' => 'text',
            ],
            'additional_features_traits' => [
                'label' => 'Additional Features & Traits',
                'type' => 'text',
            ],
            'cp' => [
                'label' => 'CP',
                'type' => 'string',
            ],
            'sp' => [
                'label' => 'SP',
                'type' => 'string',
            ],
            'ep' => [
                'label' => 'EP',
                'type' => 'string',
            ],
            'gp' => [
                'label' => 'GP',
                'type' => 'string',
            ],
            'pp' => [
                'label' => 'PP',
                'type' => 'string',
            ],
            'equipment' => [
                'type' => 'text',
            ],
            'treasure' => [
                'type' => 'text',
            ],
            'spellcasting_class' => [
                'type' => 'string',
            ],
            'spellcasting_ability' => [
                'type' => 'string',
            ],
            'spell_save_dc' => [
                'label' => 'Spell Save DC',
                'type' => 'string',
            ],
            'spell_attack_bonus' => [
                'type' => 'string',
            ],
            'spell_list' => [
                'model' => 'SpellList',
            ],
        ],
    ],

    'attributes' => [
        'parent' => 'Character',
        'fields' => [
            'label' => [
                'type' => 'string',
            ],
            'value' => [
                'type' => 'string',
            ],
            'bonus' => [
                'type' => 'string',
            ],
        ],
    ],

    'saving_throws' => [
        'parent' => 'Character',
        'fields' => [
            'label' => [
                'type' => 'string',
            ],
            'proficient' => [
                'type' => 'boolean',
            ],
            'value' => [
                'type' => 'string',
            ],
        ],
    ],

    'skills' => [
        'parent' => 'Character',
        'fields' => [
            'label' => [
                'type' => 'string',
            ],
            'proficient' => [
                'type' => 'boolean',
            ],
            'value' => [
                'type' => 'string',
            ],
            'attribute' => [
                'type' => 'string',
            ],
        ],
    ],

    'weapons' => [
        'parent' => 'Character',
        'fields' => [
            'name' => [
                'type' => 'string',
            ],
            'attack_bonus' => [
                'type' => 'string',
            ],
            'damage_type' => [
                'label' => 'Damage/Type',
                'type' => 'string',
            ],
        ],
    ],

    'spell_lists' => [
        'parent' => 'Character',
        'fields' => [
            'cantrips' => [
                'type' => 'text',
            ],
            'spell_level_1' => [
                'model' => 'SpellLevel',
                'level' => 1,
            ],
            'spell_level_2' => [
                'model' => 'SpellLevel',
                'level' => 2,
            ],
            'spell_level_3' => [
                'model' => 'SpellLevel',
                'level' => 3,
            ],
            'spell_level_4' => [
                'model' => 'SpellLevel',
                'level' => 4,
            ],
            'spell_level_5' => [
                'model' => 'SpellLevel',
                'level' => 5,
            ],
            'spell_level_6' => [
                'model' => 'SpellLevel',
                'level' => 6,
            ],
            'spell_level_7' => [
                'model' => 'SpellLevel',
                'level' => 7,
            ],
            'spell_level_8' => [
                'model' => 'SpellLevel',
                'level' => 8,
            ],
            'spell_level_9' => [
                'model' => 'SpellLevel',
                'level' => 9,
            ],
        ],
    ],

    'spell_levels' => [
        'parent' => 'SpellList',
        'fields' => [
            'level' => [
                'type' => 'string',
            ],
            'slots_total' => [
                'type' => 'string',
            ],
            'slots_expended' => [
                'type' => 'string',
            ],
            'spells' => [
                'model' => 'Spell',
                'multiple' => true,
            ],
        ],
    ],

    'spells' => [
        'parent' => 'SpellLevel',
        'fields' => [
            'prepared' => [
                'type' => 'boolean',
            ],
            'name' => [
                'type' => 'string',
            ],
        ],
    ],

];

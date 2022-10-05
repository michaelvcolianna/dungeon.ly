<?php

return [

    'character' => [
        'information' => [
            'avatar_path' => [
                'label' => 'Avatar',
                'type' => 'image',
            ],
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
            'character_backstory' => [
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
        ],
        'attributes' => [
            'strength' => [
                'type' => 'attribute',
                'abbreviation' => 'str',
            ],
            'dexterity' => [
                'type' => 'attribute',
                'abbreviation' => 'dex',
            ],
            'constitution' => [
                'type' => 'attribute',
                'abbreviation' => 'con',
            ],
            'intelligence' => [
                'type' => 'attribute',
                'abbreviation' => 'int',
            ],
            'wisdom' => [
                'type' => 'attribute',
                'abbreviation' => 'wis',
            ],
            'charisma' => [
                'type' => 'attribute',
                'abbreviation' => 'cha',
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
        ],
        'saving_throws' => [
            'strength' => [
                'type' => 'saving_throw',
            ],
            'dexterity' => [
                'type' => 'saving_throw',
            ],
            'constitution' => [
                'type' => 'saving_throw',
            ],
            'intelligence' => [
                'type' => 'saving_throw',
            ],
            'wisdom' => [
                'type' => 'saving_throw',
            ],
            'charisma' => [
                'type' => 'saving_throw',
            ],
        ],
        'skills' => [
            'acrobatics' => [
                'type' => 'skill',
                'attribute' => 'Dex',
            ],
            'animal_handling' => [
                'type' => 'skill',
                'attribute' => 'Wis',
            ],
            'arcana' => [
                'type' => 'skill',
                'attribute' => 'Int',
            ],
            'athletics' => [
                'type' => 'skill',
                'attribute' => 'Str',
            ],
            'deception' => [
                'type' => 'skill',
                'attribute' => 'Cha',
            ],
            'history' => [
                'type' => 'skill',
                'attribute' => 'Int',
            ],
            'insight' => [
                'type' => 'skill',
                'attribute' => 'Wis',
            ],
            'intimidation' => [
                'type' => 'skill',
                'attribute' => 'Chat',
            ],
            'investigation' => [
                'type' => 'skill',
                'attribute' => 'Int',
            ],
            'medicine' => [
                'type' => 'skill',
                'attribute' => 'Wis',
            ],
            'nature' => [
                'type' => 'skill',
                'attribute' => 'Int',
            ],
            'perception' => [
                'type' => 'skill',
                'attribute' => 'Wis',
            ],
            'performance' => [
                'type' => 'skill',
                'attribute' => 'Cha',
            ],
            'persuasion' => [
                'type' => 'skill',
                'attribute' => 'Cha',
            ],
            'religion' => [
                'type' => 'skill',
                'attribute' => 'Int',
            ],
            'sleight_hand' => [
                'label' => 'Sleight of Hand',
                'type' => 'skill',
                'attribute' => 'Dex',
            ],
            'stealth' => [
                'type' => 'skill',
                'attribute' => 'Dex',
            ],
            'survival' => [
                'type' => 'skill',
                'attribute' => 'Wis',
            ],
        ],
        'combat' => [
            'armor_class' => [
                'type' => 'string',
            ],
            'initiative' => [
                'type' => 'string',
            ],
            'speed' => [
                'type' => 'string',
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
            'attacks_spellcasting_notes' => [
                'label' => 'Attacks/Spellcasting Notes',
                'type' => 'text',
            ],
            'death_save_successes' => [
                'label' => 'Successes',
                'type' => 'death_save',
                'kind' => 'success',
                'count' => 3,
            ],
            'death_save_failures' => [
                'label' => 'Failures',
                'type' => 'death_save',
                'kind' => 'failure',
                'count' => 3,
            ],
        ],
        'weapons' => [
            'list' => [
                'type' => 'weapon',
                'count' => 3,
            ],
        ],
        'gear' => [
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
        ],
        'magic' => [
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
                'type' => 'spell_list',
            ],
        ],
    ],

    'attribute' => [
        'name' => [
            'type' => 'string',
        ],
        'value' => [
            'type' => 'string',
        ],
        'bonus' => [
            'type' => 'string',
        ],
    ],

    'saving_throw' => [
        'name' => [
            'type' => 'string',
        ],
        'value' => [
            'type' => 'string',
        ],
    ],

    'skill' => [
        'name' => [
            'type' => 'string',
        ],
        'value' => [
            'type' => 'string',
        ],
        'attribute' => [
            'type' => 'string',
        ],
    ],

    'death_save' => [
        'kind' => [
            'type' => 'string',
        ],
        'number' => [
            'type' => 'string',
        ],
    ],

    'weapon' => [
        'number' => [
            'type' => 'string',
        ],
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

    'spell_list' => [
        'cantrips' => [
            'type' => 'text',
        ],
        'spell_levels' => [
            'type' => 'spell_level',
            'count' => 9,
        ],
    ],

    'spell_level' => [
        'number' => [
            'type' => 'string',
        ],
        'slots_total' => [
            'type' => 'string',
        ],
        'slots_expended' => [
            'type' => 'string',
        ],
        'spells' => [
            'type' => 'text',
        ],
    ],

];

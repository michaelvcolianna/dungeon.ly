<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Character Field Definitions
    |--------------------------------------------------------------------------
    |
    | Labels and other details for the fields on a D&D character sheet. List of
    | possible properties:
    | - attribute: Required for skills, linked attribute
    | - column: Required, database column type
    | - groups: Optional, used when a field is a group of field templates
    | - label: Optional, field label (if overriding built-in function)
    | - rows: Optional, used by textareas (defaults to 5)
    | - size: Required for images, file physical size limit in kb
    | - template: Optional, field template to use (defaults to text)
    |
    */

    'character' => [
        'acrobatics' => [
            'attribute' => 'Dex',
            'column' => 'json',
            'template' => 'skill',
        ],
        'additional_features_traits' => [
            'column' => 'text',
            'label' => 'Additional Features & Traits',
            'rows' => 10,
            'template' => 'textarea',
        ],
        'age' => ['column' => 'string'],
        'affiliation' => [
            'column' => 'string',
            'label' => 'Group Affiliation',
        ],
        'alignment' => ['column' => 'string'],
        'allies_organizations' => [
            'column' => 'text',
            'label' => 'Allies & Organizations',
            'rows' => 10,
            'template' => 'textarea',
        ],
        'animal_handling' => [
            'attribute' => 'Wis',
            'column' => 'json',
            'template' => 'skill',
        ],
        'appearance' => [
            'column' => 'string',
            'size' => 2048,
            'template' => 'file-upload',
        ],
        'arcana' => [
            'attribute' => 'Int',
            'column' => 'json',
            'template' => 'skill',
        ],
        'armor_class' => ['column' => 'string'],
        'athletics' => [
            'attribute' => 'Str',
            'column' => 'json',
            'template' => 'skill',
        ],
        'attacks_spellcasting' => [
            'column' => 'text',
            'label' => 'Attacks & Spellcasting',
            'rows' => 10,
            'template' => 'textarea',
        ],
        'background' => ['column' => 'string'],
        'backstory' => [
            'column' => 'text',
            'rows' => 20,
            'template' => 'textarea',
        ],
        'bonds' => [
            'column' => 'text',
            'template' => 'textarea',
        ],
        'charisma' => [
            'column' => 'json',
            'template' => 'attribute',
        ],
        'class_level' => [
            'column' => 'string',
            'label' => 'Class & Level',
        ],
        'constitution' => [
            'column' => 'json',
            'template' => 'attribute',
        ],
        'death_saves' => [
            'column' => 'json',
            'groups' => ['failures', 'successes'],
            'template' => 'death-save',
        ],
        'deception' => [
            'attribute' => 'Cha',
            'column' => 'json',
            'template' => 'skill',
        ],
        'dexterity' => [
            'column' => 'json',
            'template' => 'attribute',
        ],
        'equipment' => [
            'column' => 'text',
            'rows' => 10,
            'template' => 'textarea',
        ],
        'experience_points' => ['column' => 'string'],
        'eyes' => ['column' => 'string'],
        'features_traits' => [
            'column' => 'text',
            'label' => 'Features & Traits',
            'rows' => 20,
            'template' => 'textarea',
        ],
        'flaws' => [
            'column' => 'text',
            'template' => 'textarea',
        ],
        'hair' => ['column' => 'string'],
        'height' => ['column' => 'string'],
        'history' => [
            'attribute' => 'Int',
            'column' => 'json',
            'template' => 'skill',
        ],
        'hit_dice' => [
            'column' => 'json',
            'template' => 'hit-dice',
        ],
        'hit_points' => [
            'column' => 'json',
            'template' => 'hit-points',
        ],
        'ideals' => [
            'column' => 'text',
            'template' => 'textarea',
        ],
        'initiative' => ['column' => 'string'],
        'insight' => [
            'attribute' => 'Wis',
            'column' => 'json',
            'template' => 'skill',
        ],
        'inspiration' => ['column' => 'string'],
        'intelligence' => [
            'column' => 'json',
            'template' => 'attribute',
        ],
        'intimidation' => [
            'attribute' => 'Cha',
            'column' => 'json',
            'template' => 'skill',
        ],
        'investigation' => [
            'attribute' => 'Int',
            'column' => 'json',
            'template' => 'skill',
        ],
        'medicine' => [
            'attribute' => 'Wis',
            'column' => 'json',
            'template' => 'skill',
        ],
        'money' => [
            'column' => 'json',
            'template' => 'money',
        ],
        'name' => ['column' => 'string'],
        'nature' => [
            'attribute' => 'Int',
            'column' => 'json',
            'template' => 'skill',
        ],
        'other_proficiencies_languages' => [
            'column' => 'text',
            'label' => 'Other Proficiencies & Languages',
            'rows' => 10,
            'template' => 'textarea',
        ],
        'passive_wisdom' => [
            'column' => 'string',
            'label' => 'Passive Wisdom (Perception)',
        ],
        'perception' => [
            'attribute' => 'Wis',
            'column' => 'json',
            'template' => 'skill',
        ],
        'performance' => [
            'attribute' => 'Cha',
            'column' => 'json',
            'template' => 'skill',
        ],
        'personality_traits' => [
            'column' => 'text',
            'template' => 'textarea',
        ],
        'persuasion' => [
            'attribute' => 'Cha',
            'column' => 'json',
            'template' => 'skill',
        ],
        'proficiency_bonus' => ['column' => 'string'],
        'race' => ['column' => 'string'],
        'religion' => [
            'attribute' => 'Int',
            'column' => 'json',
            'template' => 'skill',
        ],
        'skin' => ['column' => 'string'],
        'sleight_of_hand' => [
            'attribute' => 'Dex',
            'column' => 'json',
            'label' => 'Sleight of Hand',
            'template' => 'skill',
        ],
        'speed' => ['column' => 'string'],
        'spell_attack_bonus' => ['column' => 'string'],
        'spell_save_dc' => [
            'column' => 'string',
            'label' => 'Spell Save DC',
        ],
        'spell_levels' => [
            'column' => 'json',
            'groups' => ['one', 'two', 'three', 'four', 'five', 'size', 'seven', 'eight', 'nine'],
            'template' => 'spell-level',
        ],
        'spellcasting_class' => ['column' => 'string'],
        'spellcasting_ability' => ['column' => 'string'],
        'spells' => [
            'column' => 'json',
            'groups' => ['cantrips', 'one', 'two', 'three', 'four', 'five', 'size', 'seven', 'eight', 'nine'],
            'template' => 'spell',
        ],
        'stealth' => [
            'attribute' => 'Dex',
            'column' => 'json',
            'template' => 'skill',
        ],
        'strength' => [
            'column' => 'json',
            'template' => 'attribute',
        ],
        'survival' => [
            'attribute' => 'Wis',
            'column' => 'json',
            'template' => 'skill',
        ],
        'symbol' => [
            'column' => 'string',
            'label' => 'Group Symbol',
            'size' => 2048,
            'template' => 'file-upload',
        ],
        'treasure' => [
            'column' => 'text',
            'rows' => 10,
            'template' => 'textarea',
        ],
        'weapons' => [
            'column' => 'json',
            'groups' => ['one', 'two', 'three'],
            'template' => 'weapon',
        ],
        'weight' => ['column' => 'string'],
        'wisdom' => [
            'column' => 'json',
            'template' => 'attribute',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | JSON Structure
    |--------------------------------------------------------------------------
    |
    | Defines the JSON field properties. Most use the same ones as the general
    | fields defined above. If a property is an empty array it will default to a
    | text input.
    |
    */
    'json' => [
        'attribute' => [
            'proficiency' => ['template' => 'checkbox'],
            'value' => [],
            'bonus' => [],
            'saving_throw' => [],
        ],
        'death-save' => [
            'one' => ['template' => 'checkbox'],
            'two' => ['template' => 'checkbox'],
            'three' => ['template' => 'checkbox'],
        ],
        'hit-dice' => [
            'total' => [],
            'value' => [
                'label' => 'Hit Dice',
                'template' => 'textarea',
            ],
        ],
        'hit-points' => [
            'current' => [
                'label' => 'Current Hit Points',
                'template' => 'textarea',
            ],
            'maximum' => ['label' => 'Hit Points Maximum'],
            'temporary' => [
                'label' => 'Temporary Hit Points',
                'template' => 'textarea',
            ],
        ],
        'money' => [
            'cp' => ['label' => 'CP'],
            'sp' => ['label' => 'SP'],
            'ep' => ['label' => 'EP'],
            'gp' => ['label' => 'GP'],
            'pp' => ['label' => 'PP'],
        ],
        'skill' => [
            'proficiency' => ['template' => 'checkbox'],
            'value' => [],
        ],
        'spell-level' => [
            'level' => [],
            'slots_expended' => [],
            'slots_total' => [],
        ],
        'spell' => [
            'book_page_description' => ['label' => 'Book & Page/Description'],
            'name' => [],
            'prepared' => ['template' => 'checkbox'],
        ],
        'weapon' => [
            'attack_bonus' => ['label' => 'Atk Bonus'],
            'damage_type' => ['label' => 'Damage/Type'],
            'name' => [],
        ],
    ],

];

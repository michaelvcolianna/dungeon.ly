<?php

namespace App\Models;

use App\Traits\BelongsToCharacter;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use BelongsToCharacter;

    /** @var array */
    const DEFINITION = [
        'acrobatics' => 'Dex',
        'animal_handling' => 'Wis',
        'arcana' => 'Int',
        'athletics' => 'Str',
        'deception' => 'Cha',
        'history' => 'Int',
        'insight' => 'Wis',
        'intimidation' => 'Cha',
        'investigation' => 'Int',
        'medicine' => 'Wis',
        'nature' => 'Int',
        'perception' => 'Wis',
        'performance' => 'Cha',
        'persuasion' => 'Cha',
        'religion' => 'Int',
        'sleight_hand' => 'Dex',
        'stealth' => 'Dex',
        'survival' => 'Wis',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}

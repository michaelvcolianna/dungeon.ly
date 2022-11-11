<?php

namespace App\Models;

use App\Traits\BelongsToCharacter;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use BelongsToCharacter;

    /** @var array */
    const DEFINITION = [
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
        'wisdom',
        'charisma',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}

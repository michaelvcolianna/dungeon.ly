<?php

namespace App\Traits;

use App\Models\Character;

trait BelongsToCharacter
{
    /**
     * Get the character that this model belongs to.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

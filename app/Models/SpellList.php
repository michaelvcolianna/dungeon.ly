<?php

namespace App\Models;

class SpellList extends BaseModel
{
    /**
     * Get the character that has the spell list.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

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

    /**
     * Get the spell levels associated with the spell list.
     */
    public function spellLevels()
    {
        return $this->hasMany(SpellLevel::class);
    }
}

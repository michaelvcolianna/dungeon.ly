<?php

namespace App\Models;

class Weapon extends BaseModel
{
    /**
     * Get the character that has the weapon.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

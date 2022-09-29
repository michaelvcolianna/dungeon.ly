<?php

namespace App\Models;

class Attribute extends BaseModel
{
    /**
     * Get the character that has the attribute.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

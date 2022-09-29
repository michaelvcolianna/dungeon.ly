<?php

namespace App\Models;

class SpellLevel extends BaseModel
{
    /**
     * Get the list that has the spell level.
     */
    public function spellList()
    {
        return $this->belongsTo(SpellList::class);
    }
}

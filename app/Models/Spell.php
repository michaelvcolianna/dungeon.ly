<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the level that the spell is part of.
     */
    public function spellLevel()
    {
        return $this->belongsTo(SpellLevel::class);
    }
}

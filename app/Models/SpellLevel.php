<?php

namespace App\Models;

use App\Traits\BelongsToCharacter;
use Illuminate\Database\Eloquent\Model;

class SpellLevel extends Model
{
    use BelongsToCharacter;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the spells associated with this level.
     */
    public function spells()
    {
        return $this->hasMany(Spell::class);
    }
}

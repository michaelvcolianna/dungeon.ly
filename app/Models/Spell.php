<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Spell extends BaseModel
{
    use SoftDeletes;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'is_prepared',
    ];

    /**
     * Get the prepared status.
     *
     * @return boolean
     */
    public function getIsPreparedAttribute()
    {
        return $this->trashed();
    }

    /**
     * Get the level that has the spell.
     */
    public function spellLevel()
    {
        return $this->belongsTo(SpellLevel::class);
    }
}

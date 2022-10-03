<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class SpellList extends BaseModel
{
    use SoftDeletes;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'is_hidden',
    ];

    /**
     * Get the hidden status.
     *
     * @return boolean
     */
    public function getIsHiddenAttribute()
    {
        return $this->trashed();
    }

    /**
     * Get the character that has the spell list.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

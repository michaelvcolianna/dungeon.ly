<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends BaseModel
{
    use SoftDeletes;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'is_proficient',
    ];

    /**
     * Get the proficient status.
     *
     * @return boolean
     */
    public function getIsProficientAttribute()
    {
        return $this->trashed();
    }

    /**
     * Get the character that has the skill.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

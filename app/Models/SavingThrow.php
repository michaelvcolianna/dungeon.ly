<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class SavingThrow extends BaseModel
{
    use SoftDeletes;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'is_proficient',
        'label',
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
     * Get the label.
     *
     * @return boolean
     */
    public function getLabelAttribute()
    {
        return $this->buildLabel($this->name);
    }

    /**
     * Get the character that has the saving throw.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

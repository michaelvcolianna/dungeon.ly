<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class DeathSave extends BaseModel
{
    use SoftDeletes;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'is_checked',
        'display_label',
    ];

    /**
     * Get the proficient status.
     *
     * @return boolean
     */
    public function getIsCheckedAttribute()
    {
        return $this->trashed();
    }

    /**
     * Get the character that has the death save.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    /**
     * Get the display label.
     *
     * @return string
     */
    public function getDisplayLabelAttribute()
    {
        return sprintf('#%s', $this->number);
    }
}

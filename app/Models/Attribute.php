<?php

namespace App\Models;

class Attribute extends BaseModel
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'label',
    ];

    /**
     * Get the character that has the attribute.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}

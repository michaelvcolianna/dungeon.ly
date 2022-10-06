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
        'label',
        'display_label',
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

    /**
     * Get the display label.
     *
     * @return string
     */
    public function getDisplayLabelAttribute()
    {
        $label = config(sprintf('fields.character.skills.%s.label', $this->name))
            ?? $this->label
        ;

        return sprintf('%s (%s)', $label, $this->attribute);
    }
}

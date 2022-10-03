<?php

namespace App\Models;

use Illuminate\Support\Str;

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
     * Get the validation rules.
     *
     * @return array
     */
    public static function validationRules()
    {
        $rules = [];

        foreach(config('fields.attribute') as $field => $config)
        {
            if(Str::contains($config['type'], ['string', 'text', 'image']))
            {
                $rules[sprintf('attribute.%s', $field)] = 'nullable';
            }
        }

        return $rules;
    }

    /**
     * Get the character that has the attribute.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    /**
     * Get the label.
     *
     * @return boolean
     */
    public function getLabelAttribute()
    {
        return Str::of($this->name)->replace('_', ' ')->title();
    }
}

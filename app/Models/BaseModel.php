<?php

namespace App\Models;

use App\Traits\MakesLabels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    use MakesLabels;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get validation rules.
     *
     * @return array
     */
    public static function validationRules()
    {
        $rules = [];

        $name = Str::singular((new static())->getTable());

        $fields = config(sprintf('fields.%s', $name));

        // Special processing for character sheet grouping
        if($name === 'character')
        {
            $fields = [];

            foreach(config('fields.character') as $group)
            {
                foreach($group as $field => $config)
                {
                    $fields[$field] = $config;
                }
            }
        }

        foreach($fields as $field => $config)
        {
            if(Str::contains($config['type'], ['string', 'text', 'image']))
            {
                $rules[sprintf('%s.%s', $name, $field)] = 'nullable';
            }
        }

        return $rules;
    }

    /**
     * Friendly toggle for checkbox types.
     *
     * @return void
     */
    public function toggle()
    {
        if(in_array(
            'Illuminate\Database\Eloquent\SoftDeletes',
            class_uses($this)
        ))
        {
            if($this->trashed())
            {
                $this->restore();
            }
            else
            {
                $this->delete();
            }
        }
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
}

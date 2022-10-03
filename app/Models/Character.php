<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Character extends BaseModel
{
    use SoftDeletes;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'avatar_url',
        'group_symbol_url',
        'is_npc',
    ];

    /**
     * Get the validation rules.
     *
     * @return array
     */
    public static function validationRules()
    {
        $rules = [];

        foreach(config('fields.character') as $fields)
        {
            foreach($fields as $field => $config)
            {
                if(Str::contains($config['type'], ['string', 'text', 'image']))
                {
                    $rules[sprintf('character.%s', $field)] = 'nullable';
                }
            }
        }

        return $rules;
    }

    /**
     * Get the current character.
     *
     * @return \App\Models\Character
     */
    public static function fromSession()
    {
        if($id = session()->get('character_id'))
        {
            return static::find($id);
        }

        return null;
    }

    /**
     * Get the NPC status.
     *
     * @return boolean
     */
    public function getIsNpcAttribute()
    {
        return $this->trashed();
    }

    /**
     * Get the URL to the character's avatar image.
     *
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        return $this->getImageUrl('avatar');
    }

    /**
     * Get the URL to the character's group symbol image.
     *
     * @return string
     */
    public function getGroupSymbolUrlAttribute()
    {
        return $this->getImageUrl('group_symbol');
    }

    /**
     * Get the attributes associated with the character.
     */
    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    /**
     * Get a specific attribute.
     *
     * @param  string  $name
     * @return \App\Models\Attribute
     */
    public function attribute($name)
    {
        return $this->attributes()->where('name', $name)->first();
    }

    /**
     * Get the saving throws associated with the character.
     */
    public function savingThrows()
    {
        return $this->hasMany(SavingThrow::class);
    }

    /**
     * Get the skills associated with the character.
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * Get the death saves associated with the character.
     */
    public function deathSaves()
    {
        return $this->hasMany(DeathSave::class);
    }

    /**
     * Get the weapons associated with the character.
     */
    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }

    /**
     * Get the spell list associated with the character.
     */
    public function spellList()
    {
        return $this->hasOne(SpellList::class);
    }
}

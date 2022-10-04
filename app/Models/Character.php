<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

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
     * Get the current character.
     *
     * @return \App\Models\Character
     */
    public static function fromSession()
    {
        if($id = session()->get('character_id'))
        {
            return static::withTrashed()->find($id);
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
        return $this->hasMany(SavingThrow::class)->withTrashed();
    }

    /**
     * Get a specific saving throw.
     *
     * @param  string  $name
     * @return \App\Models\SavingThrow
     */
    public function savingThrow($name)
    {
        return $this->savingThrows()->where('name', $name)->first();
    }

    /**
     * Get the skills associated with the character.
     */
    public function skills()
    {
        return $this->hasMany(Skill::class)->withTrashed();
    }

    /**
     * Get a specific skill.
     *
     * @param  string  $name
     * @return \App\Models\Skill
     */
    public function skill($name)
    {
        return $this->skills()->where('name', $name)->first();
    }

    /**
     * Get the death saves associated with the character.
     */
    public function deathSaves()
    {
        return $this->hasMany(DeathSave::class)->withTrashed();
    }

    /**
     * Get a specific death save.
     *
     * @param  string  $kind
     * @param  integer  $number
     * @return \App\Models\DeathSave
     */
    public function deathSave($kind, $number)
    {
        return $this->deathSaves()->where([
            ['kind', $kind],
            ['number', $number],
        ])->first();
    }

    /**
     * Get the weapons associated with the character.
     */
    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }

    /**
     * Get a specific weapon.
     *
     * @param  integer  $number
     * @return \App\Models\Weapon
     */
    public function weapon($number)
    {
        return $this->weapons()->where('number', $number)->first();
    }

    /**
     * Get the spell list associated with the character.
     */
    public function spellList()
    {
        return $this->hasOne(SpellList::class);
    }
}

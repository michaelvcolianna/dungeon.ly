<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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
     * Get the user that owns the character.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the team (game) that the character is a part of.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the current character.
     *
     * @return \App\Models\Character
     */
    public static function fromSession()
    {
        $gameId = sprintf('characters.%s', auth()->user()->currentTeam->id);

        if($id = session()->get($gameId))
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
        return $this->getImageUrl('avatar_path');
    }

    /**
     * Get the URL to the character's group symbol image.
     *
     * @return string
     */
    public function getGroupSymbolUrlAttribute()
    {
        return $this->getImageUrl('group_symbol_path');
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

    /**
     * Get a specific spell level.
     *
     * @param  integer  $number
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function spellLevel($number)
    {
        return $this->spellList->spellLevels()->where('number', $number)->first();
    }

    /**
     * Update an image.
     *
     * @param  mixed  $image
     * @param  string  $field
     * @return void
     */
    public function updateImage($image, $field)
    {
        tap($this->{$field}, function($previous) use($image, $field) {
            $this->forceFill([
                $field => $image->storePublicly($field),
            ])->save();

            if($previous)
            {
                Storage::delete($previous);
            }
        });
    }

    /**
     * Delete an image.
     *
     * @param  string  $field
     * @return void
     */
    public function deleteImage($field)
    {
        if(is_null($this->{$field}))
        {
            return;
        }

        Storage::delete($this->{$field});

        $this->forceFill([
            $field => null,
        ])->save();
    }

    /**
     * Get an image URL.
     *
     * @param  string  $field
     * @return string
     */
    public function getImageUrl($field)
    {
        return $this->{$field}
            ? Storage::url($this->{$field})
            : null
        ;
    }
}

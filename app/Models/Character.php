<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute as Cast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Character extends Model
{
    use SoftDeletes;

    /** @var array */
    const DEFINITION = [
        'name',
        'class_level',
        'background',
        'race',
        'alignment',
        'experience_points',
        'age',
        'height',
        'weight',
        'eyes',
        'skin',
        'hair',
        'personality_traits',
        'ideals',
        'bonds',
        'flaws',
        'features_traits',
        'other_proficiencies_languages',
        'character_appearance',
        'character_backstory',
        'allies_organizations',
        'group_name',
        'inspiration',
        'proficiency_bonus',
        'passive_wisdom',
        'armor_class',
        'initiative',
        'speed',
        'hit_point_maximum',
        'current_hit_points',
        'temporary_hit_points',
        'hit_dice_total',
        'hit_dice_type',
        'attacks_spellcasting_notes',
        'cp',
        'sp',
        'ep',
        'gp',
        'pp',
        'equipment',
        'treasure',
        'spellcasting_class',
        'spellcasting_ability',
        'spell_save_dc',
        'spell_attack_bonus',
        'cantrips',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'avatar_url',
        'display_class_level',
        'display_name',
        'display_race',
        'group_symbol_url',
        'url',
    ];

    /**
     * Get the current character.
     *
     * @return \App\Models\Character
     */
    public static function current()
    {
        if($id = request()->route('id'))
        {
            return static::find($id);
        }

        return null;
    }

    /// Helpers

    /**
     * Whether a character can be an NPC or not.
     *
     * @return boolean
     */
    public function canBeNpc()
    {
        return $this->user->ownsTeam($this->team);
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
    public function imageUrl($field)
    {
        return $this->{$field}
            ? Storage::url($this->{$field})
            : null
        ;
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

    /// Relationships

    /**
     * Get the attributes associated with the character.
     */
    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    /**
     * Get the death saves associated with the character.
     */
    public function deathSaves()
    {
        return $this->hasMany(DeathSave::class);
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
     * Get the spell levels associated with the character.
     */
    public function spellLevels()
    {
        return $this->hasMany(SpellLevel::class);
    }

    /**
     * Get the team (game) that the character is a part of.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the user that owns the character.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the weapons associated with the character.
     */
    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }

    /// General casts

    /**
     * Get the URL to the character's avatar image.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function avatarUrl(): Cast
    {
        return Cast::make(
            get: fn () => $this->imageUrl('avatar_path'),
        );
    }

    /**
     * Get the formatted class & level.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function displayClassLevel(): Cast
    {
        return Cast::make(
            get: fn () => $this->class_level ?? 'Unknown class/level',
        );
    }

    /**
     * Get the formatted name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function displayName(): Cast
    {
        return Cast::make(
            get: fn () => $this->name ?? 'Unnamed',
        );
    }

    /**
     * Get the formatted race.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function displayRace(): Cast
    {
        return Cast::make(
            get: fn () => $this->race ?? 'Unknown race',
        );
    }

    /**
     * Get the URL to the character's group symbol image.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function groupSymbolUrl(): Cast
    {
        return Cast::make(
            get: fn () => $this->imageUrl('group_symbol_path'),
        );
    }

    /**
     * Get the URL to the character.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function url(): Cast
    {
        return Cast::make(
            get: fn () => route('characters.sheet', ['id' => $this->id]),
        );
    }
}

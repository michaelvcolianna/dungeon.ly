<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Character extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'strength' => AsArrayObject::class,
        'dexterity' => AsArrayObject::class,
        'constitution' => AsArrayObject::class,
        'intelligence' => AsArrayObject::class,
        'wisdom' => AsArrayObject::class,
        'charisma' => AsArrayObject::class,
        'hit_points' => AsArrayObject::class,
        'hit_dice' => AsArrayObject::class,
        'death_saves' => AsArrayObject::class,
        'spell_levels' => AsArrayObject::class,
        'spells' => AsArrayObject::class,
        'acrobatics' => AsArrayObject::class,
        'animal_handling' => AsArrayObject::class,
        'arcana' => AsArrayObject::class,
        'athletics' => AsArrayObject::class,
        'deception' => AsArrayObject::class,
        'history' => AsArrayObject::class,
        'insight' => AsArrayObject::class,
        'intimidation' => AsArrayObject::class,
        'investigation' => AsArrayObject::class,
        'medicine' => AsArrayObject::class,
        'money' => AsArrayObject::class,
        'nature' => AsArrayObject::class,
        'perception' => AsArrayObject::class,
        'performance' => AsArrayObject::class,
        'persuasion' => AsArrayObject::class,
        'religion' => AsArrayObject::class,
        'sleight_of_hand' => AsArrayObject::class,
        'stealth' => AsArrayObject::class,
        'survival' => AsArrayObject::class,
        'weapons' => AsArrayObject::class,
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the team that the D&D character belongs to.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the user that owns the D&D character.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the URL to an image.
     *
     * @param  string  $image
     * @return string
     */
    public function getImage($image)
    {
        if($this->{$image})
        {
            return Storage::disk('public')->url($this->{$image});
        }

        if($image === 'appearance' && !$this->name)
        {
            return $this->user->profile_photo_url;
        }

        $name = ($image === 'appearance')
            ? urlencode($this->name)
            : 'NA';
            ;

        return 'https://ui-avatars.com/api/?name=' . $name;
    }
}

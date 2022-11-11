<?php

namespace App\Models;

use App\Traits\BelongsToCharacter;
use Illuminate\Database\Eloquent\Model;

class SavingThrow extends Model
{
    use BelongsToCharacter;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}

<?php

namespace App\Traits;

use App\Models\Character;

trait HasCharacter
{
    public Character $character;

    public function updateCharacter()
    {
        $this->character = Character::current();
    }
}

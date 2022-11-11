<?php

namespace App\Http\Livewire\Character;

use App\Models\Attribute;
use App\Models\Character;
use App\Models\DeathSave;
use App\Models\SavingThrow;
use App\Models\Skill;
use App\Models\SpellLevel;
use Livewire\Component;

class AddButton extends Component
{
    public function render()
    {
        return view('livewire.character.add-button');
    }

    public function addCharacter()
    {
        // Get current user
        $user = auth()->user();

        // Create the overall empty character
        $character = Character::create([
            'user_id' => $user->id,
            'team_id' => $user->currentTeam->id,
        ]);

        // Create the empty attributes and saving throws
        foreach(Attribute::DEFINITION as $name)
        {
            $data = [
                'character_id' => $character->id,
                'name' => $name,
            ];

            Attribute::create($data);
            SavingThrow::create($data);
        }

        // Create the empty skills
        foreach(array_keys(Skill::DEFINITION) as $name)
        {
            Skill::create([
                'character_id' => $character->id,
                'name' => $name,
            ]);
        }

        // Create the death saves
        foreach(['success', 'failure'] as $kind)
        {
            for($i = 1; $i < 4; $i++)
            {
                DeathSave::create([
                    'character_id' => $character->id,
                    'kind' => $kind,
                    'number' => $i,
                ]);
            }
        }

        // Create the empty spell levels
        for($i = 1; $i < 10; $i++)
        {
            SpellLevel::create([
                'character_id' => $character->id,
                'number' => $i,
            ]);
        }

        $this->emit('updateCharacters');
    }
}

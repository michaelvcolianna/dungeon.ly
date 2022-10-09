<?php

namespace App\Http\Livewire\Character;

use App\Models\Attribute;
use App\Models\Character;
use App\Models\DeathSave;
use App\Models\SavingThrow;
use App\Models\Skill;
use App\Models\SpellLevel;
use App\Models\SpellList;
use App\Models\Weapon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class Listing extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.character.listing');
    }

    /**
     * Determine if there are any characters to display.
     *
     * @return boolean
     */

    public function hasCharacters()
    {
        return auth()->user()->characters->isNotEmpty();
    }

    /**
     * Add a new character.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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
        foreach(config('fields.character.attributes') as $name => $config)
        {
            if($config['type'] === 'attribute')
            {
                $data = [
                    'character_id' => $character->id,
                    'name' => $name,
                ];

                Attribute::create($data);
                SavingThrow::create($data);
            }
        }

        // Create the empty skills
        foreach(config('fields.character.skills') as $name => $config)
        {
            Skill::create([
                'character_id' => $character->id,
                'name' => $name,
                'attribute' => $config['attribute'],
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

        // Create the weapons
        for($i = 1; $i < 4; $i++)
        {
            Weapon::create([
                'character_id' => $character->id,
                'number' => $i,
            ]);
        }

        // Create the spell list
        $spellList = SpellList::create([
            'character_id' => $character->id,
        ]);

        // Create the spell levels
        for($i = 1; $i < 10; $i++)
        {
            SpellLevel::create([
                'spell_list_id' => $spellList->id,
                'number' => $i,
            ]);
        }

        $this->chooseCharacter($character->id);
    }

    /**
     * Get the list of characters.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function allCharacters()
    {
        return auth()->user()->characters;
    }

    /**
     * Get a formatted short list of attributes.
     *
     * @param  \Illuminate\Database\Eloquent\Collection  $attributes
     * @return string
     */
    public function attributeSummary(Collection $attributes)
    {
        $output = [];

        foreach($attributes as $attribute)
        {
            $output[] = sprintf(
                '%s %s',
                Str::of($attribute->name)->substr(0, 3)->title(),
                $attribute->value ?? '?'
            );
        }

        return implode(' / ', $output);
    }

    /**
     * Select a character for managing.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function chooseCharacter($id)
    {
        session()->put('characters', [
            auth()->user()->currentTeam->id => $id,
        ]);

        return redirect()->route('character');
    }
}

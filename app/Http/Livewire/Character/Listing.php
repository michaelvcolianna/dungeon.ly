<?php

namespace App\Http\Livewire\Character;

use App\Models\Attribute;
use App\Models\Character;
use App\Models\DeathSave;
use App\Models\SavingThrow;
use App\Models\Skill;
use App\Models\SpellLevel;
use App\Models\SpellList;
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
     * @return void
     */
    public function addCharacter()
    {
        // Create the overall empty character
        $character = Character::create([
            'user_id' => auth()->user()->id,
        ]);

        // Create the empty attributes and saving throws
        foreach(config('character.attributes') as $attribute)
        {
            $data = [
                'character_id' => $character->id,
                'name' => $attribute,
            ];

            Attribute::create($data);
            SavingThrow::create($data);
        }

        // Create the empty skills
        foreach(config('character.skills') as $skill)
        {
            $config = config(sprintf('fields.characters.fields.%s', $skill));

            Skill::create([
                'character_id' => $character->id,
                'name' => $skill,
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
                    'number' => $i,
                    'kind' => $kind,
                ]);
            }
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
                'level' => $i,
            ]);
        }
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

        foreach(config('character.attributes') as $abbreviation => $attribute)
        {
            $output[] = sprintf(
                '%s %s',
                Str::title($abbreviation),
                $attributes->where('name', $attribute)->first()->value ?? '?',
            );
        }

        return implode(' / ', $output);
    }
}

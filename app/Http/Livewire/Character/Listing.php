<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Listing extends Component
{
    /** @var \Illuminate\Database\Eloquent\Collection */
    public Collection $characters;

    /** @var array */
    protected $listeners = [
        'updateCharacters',
    ];

    public function mount()
    {
        $this->updateCharacters();
    }

    public function render()
    {
        return view('livewire.character.listing');
    }

    public function updateCharacters()
    {
        $user = User::find(auth()->id());

        $this->characters = $user->characters()->where('team_id', $user->currentTeam->id)->get();
    }

    /**
     * Get a formatted short list of attributes.
     *
     * @param  \App\Models\Character  $character
     * @return string
     */
    public function attributesSummary(Character $character)
    {
        $output = [];

        foreach($character->attributes as $attribute)
        {
            $output[] = sprintf(
                '%s %s',
                str($attribute->name)->substr(0, 3)->title(),
                $attribute->value ?? '?'
            );
        }

        return implode(' / ', $output);
    }
}

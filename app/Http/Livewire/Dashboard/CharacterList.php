<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Character;
use Livewire\Component;

class CharacterList extends Component
{
    /**
     * The list of characters.
     *
     * @param  \Illuminate\Database\Eloquent\Collection
     */
    public $characters;

    /**
     * Events the component listens for.
     *
     * @param  array
     */
    protected $listeners = [
        'updateCharacters',
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->updateCharacters();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.dashboard.character-list');
    }

    /**
     * Update the list of characters.
     */
    public function updateCharacters()
    {
        // Obtain the user's characters for the current team
        $this->characters = Character::where([
            ['user_id', auth()->user()->id],
            ['team_id', auth()->user()->currentTeam->id],
        ])->get();
    }

    /**
     * Add a character for the user's current team.
     */
    public function addCharacter()
    {
        try
        {
            Character::create([
                'user_id' => auth()->user()->id,
                'team_id' => auth()->user()->currentTeam->id,
            ]);

            $this->emit('updateCharacters');
        }
        catch(\Exception $e)
        {
            // @todo Do something with $e
        }
    }

    /**
     * Go to the page to view a character.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function viewCharacter($id)
    {
        if($character = Character::find($id))
        {
            // @todo Add real character view route
            return redirect()->route('character.view', ['character' => $character]);
        }

        abort(404);
    }
}

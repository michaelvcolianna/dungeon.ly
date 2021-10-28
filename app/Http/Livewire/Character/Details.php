<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use Livewire\Component;

class Details extends Component
{
    /**
     * The character.
     *
     * @var \App\Models\Character
     */
    public Character $character;

    /**
     * Validation rules.
     *
     * @var array
     */
    protected $rules = [
        'character.name' => 'nullable|string',
    ];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.character.details');
    }

    /**
     * Take action(s) on update.
     *
     * @param  mixed  $name
     * @param  mixed  $value
     * @return void
     */
    public function updated($name, $value)
    {
        $this->character->save();

        $this->emit('updatedCharacter');
    }
}

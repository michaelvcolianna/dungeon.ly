<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use Livewire\Component;

class NameField extends Component
{
    /**
     * The character.
     *
     * @param  \Illuminate\Database\Eloquent\Collection
     */
    public $character;

    /**
     * Validation rules.
     *
     * @param  array
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
        return view('livewire.character.name-field');
    }

    /**
     * Action to take on the name update.
     */
    public function updatedCharacterName($value)
    {
        $this->validate();

        $this->character->save();
    }
}

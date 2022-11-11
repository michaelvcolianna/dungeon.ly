<?php

namespace App\Http\Livewire\Character;

use App\Traits\HasCharacter;
use Livewire\Component;

class Attributes extends Component
{
    use HasCharacter;

    protected $rules = [
        'character.proficiency_bonus' => 'nullable',
        'character.passive_wisdom' => 'nullable',
    ];

    public function mount()
    {
        $this->updateCharacter();
    }

    public function render()
    {
        return view('livewire.character.attributes');
    }

    public function updated()
    {
        $this->character->save();
    }
}

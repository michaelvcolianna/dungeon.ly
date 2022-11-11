<?php

namespace App\Http\Livewire\Character;

use App\Traits\HasCharacter;
use Livewire\Component;

class Gear extends Component
{
    use HasCharacter;

    protected $rules = [
        'character.cp' => 'nullable',
        'character.sp' => 'nullable',
        'character.ep' => 'nullable',
        'character.gp' => 'nullable',
        'character.pp' => 'nullable',
        'character.equipment' => 'nullable',
        'character.treasure' => 'nullable',
    ];

    public function mount()
    {
        $this->updateCharacter();
    }

    public function render()
    {
        return view('livewire.character.gear');
    }

    public function updated()
    {
        $this->character->save();
    }
}

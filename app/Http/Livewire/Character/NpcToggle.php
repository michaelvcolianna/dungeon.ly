<?php

namespace App\Http\Livewire\Character;

use App\Traits\HasCharacter;
use Livewire\Component;

class NpcToggle extends Component
{
    use HasCharacter;

    protected $rules = [
        'character.is_npc' => 'boolean',
    ];

    public function mount()
    {
        $this->updateCharacter();
    }

    public function render()
    {
        return view('livewire.character.npc-toggle');
    }

    public function updated()
    {
        $this->character->save();
    }
}

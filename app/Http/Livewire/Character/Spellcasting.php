<?php

namespace App\Http\Livewire\Character;

use App\Traits\HasCharacter;
use Livewire\Component;

class Spellcasting extends Component
{
    use HasCharacter;

    protected $rules = [
        'character.spellcasting_class' => 'nullable',
        'character.spellcasting_ability' => 'nullable',
        'character.spell_save_dc' => 'nullable',
        'character.spell_attack_bonus' => 'nullable',
        'character.cantrips' => 'nullable',
    ];

    public function mount()
    {
        $this->updateCharacter();
    }

    public function render()
    {
        return view('livewire.character.spellcasting');
    }

    public function updated()
    {
        $this->character->save();
    }
}

<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use App\Models\Dice;
use App\Traits\HasCharacter;
use Livewire\Component;

class Combat extends Component
{
    use HasCharacter;

    protected function rules()
    {
        $rules = [];

        foreach(Character::DEFINITION as $field)
        {
            $rules[sprintf('character.%s', $field)] = 'nullable';
        }

        return $rules;
    }

    public function mount()
    {
        $this->updateCharacter();
    }

    public function render()
    {
        return view('livewire.character.combat');
    }

    public function updated()
    {
        $this->character->save();
    }

    public function rollInitiative()
    {
        $roll = Dice::roll(modifier: $this->character->initiative);

        $this->emit('rollResult', [
            'for' => 'Initiative',
            'total' => $roll['total'],
            'details' => $roll['details'],
        ]);
    }
}

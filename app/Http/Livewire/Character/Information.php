<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use App\Traits\HasCharacter;
use Livewire\Component;

class Information extends Component
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
        return view('livewire.character.information');
    }

    public function updated()
    {
        $this->character->save();
    }
}

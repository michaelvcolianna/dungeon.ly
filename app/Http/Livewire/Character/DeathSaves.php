<?php

namespace App\Http\Livewire\Character;

use App\Http\Livewire\Field;

class DeathSaves extends Field
{
    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'character.death_saves.successes.*' => 'nullable',
            'character.death_saves.failures.*' => 'nullable',
        ];
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->getCharacter();

        $this->field = 'character.death_saves';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->rules());
        return view('livewire.character.death-saves');
    }
}

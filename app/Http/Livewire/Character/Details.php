<?php

namespace App\Http\Livewire\Character;

use App\Traits\HasACharacter;
use Livewire\Component;

class Details extends Component
{
    use HasACharacter;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return array_fill_keys($this->fields, 'nullable');
    }

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
        if(empty($value))
        {
            data_set($this, $name, null);
        }

        $this->character->save();

        if($name === 'character.name')
        {
            $this->emit('characterUpdated');
        }
    }
}

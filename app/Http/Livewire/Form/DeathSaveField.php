<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Models\DeathSave;
use Livewire\Component;

class DeathSaveField extends Component
{
    /** @var \App\Models\DeathSave */
    public DeathSave $death_save;

    /**
     * Create a new component instance.
     *
     * @param  string  $kind
     * @param  integer  $number
     * @return void
     */
    public function mount($kind, $number)
    {
        $character = Character::fromSession();
        $number++; # Incoming number is base 0
        $this->death_save = $character->deathSave($kind, $number);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.death-save-field');
    }

    /**
     * Toggle the death save's checked status.
     *
     * @return void
     */
    public function toggleObject()
    {
        $this->death_save->toggle();
    }
}

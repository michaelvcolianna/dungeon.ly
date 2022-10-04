<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Models\Weapon;
use Livewire\Component;

class WeaponField extends Component
{
    /** @var \App\Models\Weapon */
    public Weapon $weapon;

    /**
     * Dynamically generate the validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return Weapon::validationRules();
    }

    /**
     * Create a new component instance.
     *
     * @param  integer  $number
     * @return void
     */
    public function mount($number)
    {
        $character = Character::fromSession();
        $number++; # Incoming number is base 0
        $this->weapon = $character->weapon($number);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.weapon-field');
    }

    /**
     * Handle updates to data.
     *
     * @return void
     */
    public function updated()
    {
        $this->weapon->save();
    }
}

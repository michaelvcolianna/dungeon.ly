<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Models\SavingThrow;
use Livewire\Component;

class SavingThrowField extends Component
{
    /** @var \App\Models\Attribute */
    public SavingThrow $saving_throw;

    /**
     * Dynamically generate the validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return SavingThrow::validationRules();
    }

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @return void
     */
    public function mount($name)
    {
        $character = Character::fromSession();
        $this->saving_throw = $character->savingThrow($name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.saving-throw-field');
    }

    /**
     * Toggle the saving throw's proficient status.
     *
     * @return void
     */
    public function toggleObject()
    {
        $this->saving_throw->toggle();
    }
}

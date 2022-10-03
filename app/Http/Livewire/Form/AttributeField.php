<?php

namespace App\Http\Livewire\Form;

use App\Models\Attribute;
use App\Models\Character;
use Livewire\Component;

class AttributeField extends Component
{
    /** @var \App\Models\Attribute */
    public Attribute $attribute;

    /**
     * Dynamically generate the validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return Attribute::validationRules();
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
        $this->attribute = $character->attribute($name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.attribute-field');
    }

    /**
     * Handle updates to data.
     *
     * @return void
     */
    public function updated()
    {
        $this->attribute->save();
    }
}

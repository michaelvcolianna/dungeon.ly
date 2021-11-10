<?php

namespace App\Http\Livewire\Fields;

use App\Http\Livewire\Field;

class Checkbox extends Field
{
    /**
     * Create a new component instance.
     *
     * @param  string  $field
     * @param  string  $label
     * @return void
     */
    public function mount($field, $label)
    {
        $this->getCharacter();

        $this->field = $field;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.fields.checkbox');
    }
}

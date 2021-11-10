<?php

namespace App\Http\Livewire\Fields;

use App\Http\Livewire\Field;

class Text extends Field
{
    /**
     * The input type.
     *
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @param  string  $field
     * @param  string  $label
     * @param  string  $type
     * @return void
     */
    public function mount($field, $label, $type = 'text')
    {
        $this->getCharacter();

        $this->field = $field;
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.fields.text');
    }
}

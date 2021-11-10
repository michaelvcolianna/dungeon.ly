<?php

namespace App\Http\Livewire\Fields;

use App\Http\Livewire\Field;

class Textarea extends Field
{
    /**
     * The number of rows.
     *
     * @var integer
     */
    public $rows;

    /**
     * Create a new component instance.
     *
     * @param  string  $field
     * @param  string  $label
     * @param  integer  $rows
     * @return void
     */
    public function mount($field, $label, $rows = 5)
    {
        $this->getCharacter();

        $this->field = $field;
        $this->label = $label;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.fields.textarea');
    }
}

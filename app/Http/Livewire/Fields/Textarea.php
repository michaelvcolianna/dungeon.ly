<?php

namespace App\Http\Livewire\Fields;

use App\Livewire\Field;

class Textarea extends Field
{
    /**
     * The number of rows.
     *
     * @var integer
     */
    public $rows;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            $this->name => 'nullable',
        ];
    }

    /**
     * Create a new component instance.
     *
     * @param  string  $label
     * @param  string  $name
     * @param  integer  $rows
     * @return void
     */
    public function mount($label, $name, $rows = 5)
    {
        $this->setupField($label, $name);

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

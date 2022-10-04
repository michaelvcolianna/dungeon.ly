<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /** @var string */
    public $label;
    public $name;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */
    public function __construct($name, $label)
    {
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.field.checkbox');
    }
}

<?php

namespace App\View\Components\Form;

use App\Traits\MakesLabels;
use Illuminate\View\Component;

class Field extends Component
{
    use MakesLabels;

    /** @var string */
    public $label;
    public $model;
    public $name;
    public $type;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  array  $config
     * @param  string  $type
     * @return void
     */
    public function __construct($name, $config)
    {
        $this->label = $this->buildLabel($name, $config);
        $this->model = implode('.', ['character', $name]);
        $this->name = $name;
        $this->type = $config['type'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // Dynamic return based on type
        return view(sprintf('components.field.%s', $this->type));
    }
}

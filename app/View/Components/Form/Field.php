<?php

namespace App\View\Components\Form;

use App\Traits\MakesLabels;
use Illuminate\View\Component;

class Field extends Component
{
    use MakesLabels;

    /** @var array */
    public $config;

    /** @var string */
    public $domId;
    public $label;
    public $model;
    public $name;
    public $type;

    /**
     * Create a new component instance.
     *
     * @param  string  $group
     * @param  string  $name
     * @param  string  $label
     * @param  string  $model
     * @param  string  $type
     * @param  array  $config
     * @return void
     */
    public function __construct($group = null, $name = null, $label = null, $model = null, $type = null, $config = [])
    {
        $this->config = $config;
        $this->domId = $group && $name
            ? sprintf('%s-%s', $group, $name)
            : md5(time() . $model)
            ;
        $this->label = $label ?? $this->buildLabel($name, $config);
        $this->model = $model ?? implode('.', ['character', $name]);
        $this->name = $name;
        $this->type = $type ?? $config['type'];
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

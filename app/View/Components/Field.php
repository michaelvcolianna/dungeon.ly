<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Field extends Component
{
    /**
     * The field config.
     *
     * @var array
     */
    public $config;

    /**
     * The field ID.
     *
     * @var string
     */
    public $field;

    /**
     * Create a new component instance.
     *
     * @param  string  $field
     * @return void
     */
    public function __construct($field)
    {
        $this->field = $field;
        $this->config = config('dnd.' . $field);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.field');
    }

    /**
     * Get a field's label.
     *
     * @return string
     */
    public function label()
    {
        return $this->config['label'] ?? Str::of($this->field)->replace('character.', null)->replace('_', ' ')->title();
    }
}

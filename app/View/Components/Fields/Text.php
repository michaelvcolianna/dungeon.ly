<?php

namespace App\View\Components\Fields;

use Illuminate\View\Component;

class Text extends Component
{
    /**
     * The field ID.
     *
     * @var string
     */
    public $field;

    /**
     * The field label text.
     *
     * @var string
     */
    public $label;

    /**
     * The field type.
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
    public function __construct($field, $label, $type = 'text')
    {
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
        return view('components.fields.text');
    }
}

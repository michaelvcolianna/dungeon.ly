<?php

namespace App\View\Components\Fields;

use Illuminate\View\Component;

class Textarea extends Component
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
     * @param  string  $rows
     * @return void
     */
    public function __construct($field, $label, $rows = 5)
    {
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
        return view('components.fields.textarea');
    }
}

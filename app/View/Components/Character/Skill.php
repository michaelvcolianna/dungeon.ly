<?php

namespace App\View\Components\Character;

use Illuminate\View\Component;

class Skill extends Component
{
    /**
     * The field attribute.
     *
     * @var string
     */
    public $attribute;

    /**
     * The field ID.
     *
     * @var string
     */
    public $field;

    /**
     * The label text.
     *
     * @var string
     */
    public $label;

    /**
     * Create a new component instance.
     *
     * @param  string  $attribute
     * @param  string  $field
     * @param  string  $label
     * @return void
     */
    public function __construct($attribute, $field, $label)
    {
        $this->attribute = $attribute;
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
        return view('components.character.skill');
    }
}

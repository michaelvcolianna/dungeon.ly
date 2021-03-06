<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * The link text.
     *
     * @var string
     */
    public $label;

    /**
     * Create a new component instance.
     *
     * @param  string  $label
     * @return void
     */
    public function __construct($label = null)
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.link');
    }
}

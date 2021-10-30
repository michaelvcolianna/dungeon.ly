<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

/**
 * @note This component has a named slot in the view that isn't part of this
 * class but is optional.
 */
class Section extends Component
{
    /**
     * The header text for the section.
     *
     * @var string
     */
    public $header;

    /**
     * Create a new component instance.
     *
     * @param  string  $header
     * @return void
     */
    public function __construct($header)
    {
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.section');
    }
}

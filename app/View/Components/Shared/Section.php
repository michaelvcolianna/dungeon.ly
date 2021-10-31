<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class Section extends Component
{
    /**
     * Whether the details are open by default.
     *
     * @param  boolean
     */
    public $expanded;

    /**
     * Create a new component instance.
     *
     * @param  boolean  $expanded
     * @return void
     */
    public function __construct($expanded = false)
    {
        $this->expanded = $expanded;
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

    /**
     * Print the text for the Alpine open status.
     *
     * @return string
     */
    public function alpineOpen()
    {
        return ($this->expanded)
            ? 'true'
            : 'false'
            ;
    }

    /**
     * Print the text for the open status.
     *
     * @return string
     */
    public function openStatus()
    {
        return ($this->expanded)
            ? 'open'
            : null
            ;
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /** @var string */
    public $title;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @return void
     */
    public function __construct($title = null)
    {
        $this->title = $title ? sprintf('%s | ', $title) : $title;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}

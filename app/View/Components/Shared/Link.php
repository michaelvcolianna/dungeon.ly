<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Default classes for links.
     *
     * @var string
     */
    const CLASSES = 'text-red-700 underline hover:text-gray-700';

    /**
     * The classes for the link.
     *
     * @var string
     */
    public $classes;

    /**
     * The link text.
     *
     * @var string
     */
    public $label;

    /**
     * Create a new component instance.
     *
     * @param  string  $classes
     * @param  string  $label
     * @return void
     */
    public function __construct($classes = null, $label = null)
    {
        $this->classes = $classes ?? self::CLASSES;
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

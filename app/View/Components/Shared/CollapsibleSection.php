<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

/**
 * @note This component has a named slot in the view that isn't part of this
 * class but is optional.
 */
class CollapsibleSection extends Component
{
    /**
     * The section text for the clickable summary.
     *
     * @var string
     */
    public $summary;

    /**
     * Create a new component instance.
     *
     * @param  string  $summary
     * @return void
     */
    public function __construct($summary)
    {
        $this->summary = $summary;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.collapsible-section');
    }
}

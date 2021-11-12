<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class Section extends Component
{
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

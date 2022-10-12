<?php

namespace App\View\Components\Svg;

use App\Traits\IsAnImage;
use Illuminate\View\Component;

class External extends Component
{
    use IsAnImage;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $height
     * @param  mixed  $width
     * @return void
     */
    public function __construct($height = null, $width = null)
    {
        $this->height = $height ?? 20;
        $this->width = $width ?? 18;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.svg.external');
    }
}

<?php

namespace App\View\Components\Character;

use App\View\Components\Field;

class Attribute extends Field
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.character.attribute');
    }
}

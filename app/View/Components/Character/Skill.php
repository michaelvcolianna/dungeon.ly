<?php

namespace App\View\Components\Character;

use App\View\Components\Field;

class Skill extends Field
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.character.skill');
    }

    /**
     * Get a field's linked attribute, if applicable.
     *
     * @return string
     */
    public function attribute()
    {
        return $this->config['attribute'] ?? null;
    }
}

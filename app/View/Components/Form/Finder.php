<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Finder extends Component
{
    /** @var array */
    public $groups;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->groups = array_keys(config('fields.character'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.finder');
    }

    /**
     * Retrieve JSON of the groups.
     *
     * @return string
     */
    public function printGroups()
    {
        return Str::of(json_encode($this->groups))->toHtmlString();
    }
}

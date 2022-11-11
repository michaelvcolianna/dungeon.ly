<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /** @var string */
    public $description;
    public $image;
    public $title;
    public $url;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @return void
     */
    public function __construct($title = null)
    {
        $this->description = 'A (work in progress) helper app for Dungeons & Dragons. Source: https://github.com/michaelvcolianna/dungeon.ly';
        $this->image = asset('card.jpg');
        $this->title = $title ? sprintf('%s | ', $title) : $title;
        $this->url = request()->url();
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}

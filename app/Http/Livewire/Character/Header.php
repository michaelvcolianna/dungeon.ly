<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use Livewire\Component;

class Header extends Component
{
    /**
     * The character.
     *
     * @var \App\Models\Character
     */
    public Character $character;

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'updatedCharacter' => '$refresh',
    ];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.character.header');
    }
}

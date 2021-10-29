<?php

namespace App\Http\Livewire\Character;

use App\Traits\HasACharacter;
use Livewire\Component;

class Header extends Component
{
    use HasACharacter;

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'characterUpdated' => '$refresh',
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

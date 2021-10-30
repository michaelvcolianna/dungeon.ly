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

    /**
     * Print the way the header font should display.
     *
     * @return string
     */
    public function getNameDisplayProperty()
    {
        return ($this->character->name)
            ? 'font-semibold'
            : 'italic'
            ;
    }

    /**
     * Print the character name text.
     *
     * @return string
     */
    public function getCharacterNameProperty()
    {
        return $this->character->name ?? 'Unknown name';
    }

    /**
     * Print the character's user name.
     *
     * @return string
     */
    public function getUserNameProperty()
    {
        return $this->character->user->name;
    }
}

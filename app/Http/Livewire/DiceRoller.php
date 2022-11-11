<?php

namespace App\Http\Livewire;

use App\Models\Dice;
use Livewire\Component;

class DiceRoller extends Component
{
    public $results;
    public $types = ['d2', 'd4', 'd6', 'd8', 'd10', 'd12', 'd20', 'd100'];

    public $quantity;

    public $expression;
    public $modifier;
    public $type;

    public function mount()
    {
        $this->type = 'd20';
    }

    public function render()
    {
        return view('livewire.dice-roller');
    }

    public function roll($method = null)
    {
        $this->results[] = $method
            ? Dice::{$method}()
            : Dice::roll(quantity: $this->quantity, type: $this->type, modifier: $this->modifier, expression: $this->expression)
        ;

        $this->emit('roll');
    }

    public function clearHistory()
    {
        $this->results = [];
    }
}

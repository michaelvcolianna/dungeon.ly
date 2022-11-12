<?php

namespace App\Http\Livewire\Dice;

use App\Models\Dice;
use Livewire\Component;

class Roller extends Component
{
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
        return view('livewire.dice.roller');
    }

    public function roll($method = null)
    {
        $roll = $method
            ? Dice::{$method}()
            : Dice::roll(quantity: $this->quantity, type: $this->type, modifier: $this->modifier, expression: $this->expression)
        ;

        $this->emit('rollResult', [
            'for' => 'General Roll',
            'total' => $roll['total'],
            'details' => $roll['details'],
        ]);
    }
}

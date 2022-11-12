<?php

namespace App\Http\Livewire\Dice;

use Livewire\Component;

class Results extends Component
{
    public $result;

    protected $listeners = [
        'rollResult',
    ];

    public function render()
    {
        return view('livewire.dice.results');
    }

    public function rollResult($data)
    {
        $this->result = $data;
    }
}

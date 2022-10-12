<?php

namespace App\Http\Livewire;

use DiceCalc\Calc as Dice;
use Livewire\Component;

class DiceRoller extends Component
{
    /** @var array */
    public $results;
    public $types = ['d2', 'd4', 'd6', 'd8', 'd10', 'd12', 'd20', 'd100'];

    /** @var integer */
    public $quantity;

    /** @var string */
    public $expression;
    public $modifier;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->type = reset($this->types);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.dice-roller');
    }

    /**
     * Roll dice.
     *
     * @return void
     */
    public function roll()
    {
        $extra = null;

        if($this->modifier)
        {
            $modifier = intval($this->modifier);
            $operator = $modifier < 0 ? '-' : '+';
            $extra = sprintf('%s%s', $operator, abs($modifier));
        }

        $expression = $this->expression ?? sprintf(
            '%s%s%s',
            $this->quantity,
            $this->type,
            $extra
        );

        $dice = new Dice($expression);

        $this->results[] = [
            'datetime' => now()->format('g:i:sa'),
            'total' => $dice(),
            'details' => $dice->infix(),
        ];

        $this->expression = null;
    }

    /**
     * Clear the history.
     *
     * @return void
     */
    public function clearHistory()
    {
        $this->results = [];
    }
}

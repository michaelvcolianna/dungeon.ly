<?php

namespace App\Http\Livewire\Character;

use App\Models\Dice;
use App\Models\SavingThrow;
use Livewire\Component;

class SavingThrowField extends Component
{
    public SavingThrow $saving_throw;

    public $idBase;
    public $label;

    protected $rules = [
        'saving_throw.value' => 'nullable',
        'saving_throw.is_proficient' => 'boolean',
    ];

    public function mount(SavingThrow $saving_throw)
    {
        $this->saving_throw = $saving_throw;
        $this->idBase = sprintf('saving_throw.%s', $saving_throw->name);
        $this->label = str($saving_throw->name)->title();
    }

    public function render()
    {
        return view('livewire.character.saving-throw-field');
    }

    public function updated()
    {
        $this->saving_throw->save();
    }

    public function roll()
    {
        $roll = Dice::roll(modifier: $this->saving_throw->value);

        $this->emit('rollResult', [
            'for' => sprintf('%s Save', $this->label),
            'total' => $roll['total'],
            'details' => $roll['details'],
        ]);
    }
}

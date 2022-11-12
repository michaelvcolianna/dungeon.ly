<?php

namespace App\Http\Livewire\Character;

use App\Models\Attribute;
use App\Models\Dice;
use Livewire\Component;

class AttributeField extends Component
{
    public Attribute $attribute;

    public $idBase;
    public $label;

    protected $rules = [
        'attribute.value' => 'nullable',
        'attribute.bonus' => 'nullable',
    ];

    public function mount(Attribute $attribute)
    {
        $this->attribute = $attribute;
        $this->idBase = sprintf('attribute.%s', $attribute->name);
        $this->label = str($attribute->name)->title();
    }

    public function render()
    {
        return view('livewire.character.attribute-field');
    }

    public function updated()
    {
        $this->attribute->save();
    }

    public function roll()
    {
        $roll = Dice::roll(modifier: $this->attribute->bonus);

        $this->emit('rollResult', [
            'for' => $this->label,
            'total' => $roll['total'],
            'details' => $roll['details'],
        ]);
    }
}

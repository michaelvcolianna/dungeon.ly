<?php

namespace App\Http\Livewire\Character;

use App\Models\Dice;
use App\Models\Skill;
use Livewire\Component;

class SkillField extends Component
{
    public Skill $skill;

    public $attribute;
    public $idBase;
    public $label;

    protected $rules = [
        'skill.value' => 'nullable',
        'skill.is_proficient' => 'boolean',
    ];

    public function mount(Skill $skill)
    {
        $this->skill = $skill;
        $this->attribute = sprintf('(%s)', Skill::DEFINITION[$skill->name]);
        $this->label = $skill->name === 'sleight_hand'
            ? 'Sleight of Hand'
            : str($skill->name)->replace('_', ' ')->title()
        ;
    }

    public function render()
    {
        return view('livewire.character.skill-field');
    }

    public function updated()
    {
        $this->skill->save();
    }

    public function roll()
    {
        $roll = Dice::roll(modifier: $this->skill->value);

        $this->emit('rollResult', [
            'for' => $this->label,
            ...$roll,
        ]);
    }
}

<?php

namespace App\Http\Livewire\Character;

use App\Models\SpellLevel;
use Livewire\Component;

class SpellLevelField extends Component
{
    public SpellLevel $spell_level;

    public $idBase;
    public $label;

    protected $rules = [
        'spell_level.slots_total' => 'nullable',
        'spell_level.slots_expended' => 'nullable',
    ];

    public function mount(SpellLevel $spell_level)
    {
        $this->spell__level = $spell_level;
        $this->idBase = sprintf('spell_level.%s', $spell_level->number);
        $this->label = sprintf('Level %s', $spell_level->number);
    }

    public function render()
    {
        return view('livewire.character.spell-level-field');
    }

    public function updated()
    {
        $this->spell_level->save();
    }
}

<?php

namespace App\Http\Livewire\Character;

use App\Models\Spell;
use App\Models\SpellLevel;
use App\Traits\HasCharacter;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Spells extends Component
{
    use HasCharacter;

    public SpellLevel $spell_level;

    public Collection $spells;

    protected $rules = [
        'spells.*.is_prepared' => 'boolean',
        'spells.*.name' => 'nullable',
    ];

    public function mount(SpellLevel $spellLevel)
    {
        $this->spell_level = $spellLevel;
        $this->character = $spellLevel->character;
        $this->updateSpells();
    }

    public function render()
    {
        return view('livewire.character.spells');
    }

    public function updateSpells()
    {
        $this->spells = $this->spell_level->spells;
    }

    public function addSpell()
    {
        Spell::create([
            'spell_level_id' => $this->spell_level->id,
        ]);

        $this->character->refresh();
        $this->spell_level->refresh();
        $this->updateSpells();
    }

    public function deleteSpell($id)
    {
        Spell::find($id)->delete();

        $this->character->refresh();
        $this->spell_level->refresh();
        $this->updateSpells();
    }

    public function updatedSpells($value, $name)
    {
        list($sid, $property) = str($name)->explode('.');

        $this->spells[$sid]->save();
    }
}

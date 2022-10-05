<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Models\SpellList;
use Livewire\Component;

class SpellListField extends Component
{
    /** @var \App\Models\SpellList */
    public SpellList $spell_list;

    /**
     * Dynamically generate the validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return SpellList::validationRules();
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $character = Character::fromSession();
        $this->spell_list = $character->spellList;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.spell-list-field');
    }

    /**
     * Handle updates to data.
     *
     * @return void
     */
    public function updated()
    {
        $this->spell_list->save();
    }
}

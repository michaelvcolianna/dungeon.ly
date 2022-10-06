<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Models\SpellLevel;
use Illuminate\Support\Str;
use Livewire\Component;

class SpellLevelField extends Component
{
    /** @var \App\Models\SpellLevel */
    public SpellLevel $spell_level;

    /**
     * Dynamically generate the validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return SpellLevel::validationRules();
    }

    /**
     * Create a new component instance.
     *
     * @param  integer  $number
     * @return void
     */
    public function mount($number)
    {
        $character = Character::fromSession();
        $this->spell_level = $character->spellLevel($number);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.spell-level-field');
    }

    /**
     * Handle updates to data.
     *
     * @param  string  $name
     * @param  mixed  $value
     * @return void
     */
    public function updated($name, $value)
    {
        if(empty($value))
        {
            $name = Str::replace('spell_level.', '', $name);
            $this->spell_level->{$name} = null;
        }

        $this->spell_level->save();
    }
}

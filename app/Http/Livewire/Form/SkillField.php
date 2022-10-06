<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Models\Skill;
use Illuminate\Support\Str;
use Livewire\Component;

class SkillField extends Component
{
    /** @var \App\Models\Skill */
    public Skill $skill;

    /**
     * Dynamically generate the validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return Skill::validationRules();
    }

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @return void
     */
    public function mount($name)
    {
        $character = Character::fromSession();
        $this->skill = $character->skill($name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.skill-field');
    }

    /**
     * Toggle the skill's proficient status.
     *
     * @return void
     */
    public function toggleObject()
    {
        $this->skill->toggle();
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
            $name = Str::replace('skill.', '', $name);
            $this->skill->{$name} = null;
        }

        $this->skill->save();
    }
}

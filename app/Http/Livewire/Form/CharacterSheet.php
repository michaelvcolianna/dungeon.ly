<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Traits\MakesLabels;
use Illuminate\Support\Str;
use Livewire\Component;

class CharacterSheet extends Component
{
    use MakesLabels;

    /**
     * Character can be null or the model.
     *
     * @var \App\Models\Character
     */
    public $character;

    /** @var array */
    public $groups;

    /**
     * Dynamically generate the validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return Character::validationRules();
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->character = Character::fromSession();

        $this->groups = config('fields.character');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.character-sheet');
    }

    /**
     * Navigate to the dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function goToDashboard()
    {
        return redirect()->route('dashboard');
    }

    /**
     * Determine if a regular field or reference.
     *
     * @param  array  $field
     * @return boolean
     */
    public function isRegular($field)
    {
        return Str::contains($field['type'], [
            'image',
            'string',
            'text',
            'death_save',
        ]);
    }

    /**
     * Get a reference field's component name.
     *
     * @param  array  $field
     * @return string
     */
    public function componentName($field)
    {
        return sprintf('form.%s-field', Str::replace('_', '-', $field['type']));
    }

    /**
     * Handle updates to data.
     *
     * @return void
     */
    public function updated()
    {
        $this->character->save();
    }
}

<?php

namespace App\Http\Livewire\Fields;

use App\Livewire\Field;

class Skill extends Field
{
    /**
     * The field's linked attribute.
     *
     * @param  string
     */
    public $attribute;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return array_fill_keys(array_map(function($value) {
            return $this->name . '.' . $value;
        }, ['value', 'proficiency']), 'nullable');
    }

    /**
     * Create a new component instance.
     *
     * @param  string  $attribute
     * @param  string  $label
     * @param  string  $name
     * @return void
     */
    public function mount($attribute, $label, $name)
    {
        $this->setupField($label, $name);
        $this->attribute = $attribute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.fields.skill');
    }
}

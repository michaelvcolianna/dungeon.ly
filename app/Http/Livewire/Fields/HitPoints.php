<?php

namespace App\Http\Livewire\Fields;

use App\Livewire\Field;

class HitPoints extends Field
{
    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return array_fill_keys(array_map(function($value) {
            return $this->name . '.' . $value;
        }, ['maximum', 'current', 'temporary']), 'nullable');
    }

    /**
     * Create a new component instance.
     *
     * @param  string  $label
     * @param  string  $name
     * @return void
     */
    public function mount($label, $name)
    {
        $this->setupField($label, $name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.fields.hit-points');
    }
}

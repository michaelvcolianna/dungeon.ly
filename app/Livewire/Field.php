<?php

namespace App\Livewire;

use App\Traits\HasACharacter;
use Illuminate\Support\Str;
use Livewire\Component;

abstract class Field extends Component
{
    use HasACharacter;

    /**
     * The label text.
     *
     * @var string
     */
    public $label;

    /**
     * The field ID.
     *
     * @var string
     */
    public $name;

    /**
     * Validation rules.
     *
     * @return array
     */
    abstract protected function rules();

    /**
     * Obtain the character from the request and assign the base values.
     *
     * @param  string  $label
     * @param  string  $name
     * @return void
     */
    protected function setupField($label, $name)
    {
        $this->character = request()->character;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Take action(s) on update.
     *
     * @param  string  $name
     * @param  mixed  $value
     * @return void
     */
    public function updated($name, $value)
    {
        $this->character->save();

        $this->emit($this->eventName());
    }

    /**
     * Make the event name text.
     *
     * @return string
     */
    protected function eventName()
    {
        return 'updated' . Str::of($this->name)->replace('.', '_')->studly();
    }

    /**
     * Print a sub-field's name.
     *
     * @param  string  $field
     * @return string
     */
    public function fieldName($field)
    {
        return $this->name . '.' . $field;
    }

    /**
     * Print a sub-field's label.
     *
     * @param  string  $label
     * @return string
     */
    public function fieldLabel($label)
    {
        return $this->label . ' ' . $label;
    }
}

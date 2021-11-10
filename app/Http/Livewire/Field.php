<?php

namespace App\Http\Livewire;

use App\Traits\HasACharacter;
use Illuminate\Support\Str;
use Livewire\Component;

class Field extends Component
{
    use HasACharacter;

    /**
     * The field ID.
     *
     * @var string
     */
    public $field;

    /**
     * The label text.
     *
     * @var string
     */
    public $label;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            $this->field => 'nullable',
        ];
    }

    /**
     * Obtain the character from the request
     *
     * @return void
     */
    public function getCharacter()
    {
        $this->character = request()->character;
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
        if(empty($value))
        {
            data_set($this, $name, null);
        }

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
        return 'updated' . Str::of($this->field)->replace('.', '_')->studly();
    }
}

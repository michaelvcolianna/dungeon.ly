<?php

namespace App\Http\Livewire\Fields;

use App\Traits\HasACharacter;
use Illuminate\Support\Str;
use Livewire\Component;

class Spells extends Component
{
    use HasACharacter;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'character.spell_levels.*.slots_total' => 'nullable',
            'character.spell_levels.*.slots_expended' => 'nullable',
            'character.spells.*' => 'nullable',
        ];
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->character = request()->character;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.fields.spells');
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

        $this->emit($this->eventName($name));
        logger('Emitted: ' . $this->eventName($name));
    }

    /**
     * Make the event name text.
     *
     * @param  string  $name
     * @return string
     */
    protected function eventName($name)
    {
        return 'updated' . Str::of($name)->replace('.', '_')->studly();
    }
}

<?php

namespace App\Http\Livewire\Character;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class GameList extends Component
{
    /** @var \App\Models\Team */
    public $game;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->game = auth()->user()->currentTeam;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.character.game-list', [
            'characters' => $this->characters(),
        ]);
    }

    /**
     * Get all characters for the game.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function characters()
    {
        return $this->game->characters;
    }

    /**
     * Determine if there are any characters to display.
     *
     * @return boolean
     */
    public function hasCharacters()
    {
        return $this->game->characters->isNotEmpty();
    }

    /**
     * Get a formatted short list of attributes.
     *
     * @param  \Illuminate\Database\Eloquent\Collection  $attributes
     * @return string
     */
    public function attributeSummary(Collection $attributes)
    {
        $output = [];

        foreach($attributes as $attribute)
        {
            $output[] = sprintf(
                '%s %s',
                Str::of($attribute->name)->substr(0, 3)->title(),
                $attribute->value ?? '?'
            );
        }

        return implode(' / ', $output);
    }

    /**
     * Get a formatted short list of saves.
     *
     * @param  \Illuminate\Database\Eloquent\Collection  $saving_throws
     * @return string
     */
    public function savingThrowsSummary(Collection $saving_throws)
    {
        $output = [];

        foreach($saving_throws as $saving_throw)
        {
            $output[] = sprintf(
                '%s %s',
                Str::of($saving_throw->name)->substr(0, 3)->title(),
                $saving_throw->value ?? '?'
            );
        }

        return implode(' / ', $output);
    }

    /**
     * Retrieve first line of current HP.
     *
     * @param  string  $hp
     * @return string
     */
    public function currentHp($hp)
    {
        $result = Str::of($hp)->matchAll('/(\d*)/');

        return !empty($result[0]) ? $result[0] : '?';
    }
}

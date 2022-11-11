<?php

namespace App\Http\Livewire\Character;

use App\Models\DeathSave;
use Livewire\Component;

class DeathSaveField extends Component
{
    public DeathSave $death_save;

    public $idBase;

    protected $rules = [
        'death_save.is_checked' => 'boolean',
    ];

    public function mount(DeathSave $death_save)
    {
        $this->death_save = $death_save;
        $this->idBase = sprintf('death_save.%s.%s', $death_save->kind, $death_save->number);
    }

    public function render()
    {
        return view('livewire.character.death-save-field');
    }

    public function updated()
    {
        $this->death_save->save();
    }
}

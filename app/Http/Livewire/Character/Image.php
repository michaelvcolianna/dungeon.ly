<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use Livewire\Component;
use Livewire\WithFileUploads;

class Image extends Component
{
    use WithFileUploads;

    public Character $character;

    public $image_path;

    public $description;
    public $label;
    public $name;

    protected function rules()
    {
        return [
            sprintf('character.%s', $this->name) => 'nullable',
            'image_path' => 'image',
        ];
    }

    public function mount($name, $label, $description = null)
    {
        $this->character = Character::current();
        $this->description = $description;
        $this->label = $label;
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.character.image');
    }

    public function updatedImagePath($value)
    {
        $this->character->updateImage($value, $this->name);
    }

    public function removeImage($name)
    {
        $this->character->deleteImage($name);
        $this->image_path = null;
    }
}

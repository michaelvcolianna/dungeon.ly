<?php

namespace App\Http\Livewire\Form;

use App\Models\Character;
use App\Traits\MakesLabels;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageField extends Component
{
    use MakesLabels, WithFileUploads;

    /** @var \App\Models\Character */
    public Character $character;

    /** @var \Illuminate\Http\UploadedFile */
    public $avatar_path;
    public $group_symbol_path;

    /** @var string */
    public $label;
    public $name;

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules =[
        'character.avatar_path' => 'nullable',
        'character.group_symbol_path' => 'nullable',
        'avatar_path' => 'image',
        'group_symbol_path' => 'image',
    ];

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @return void
     */
    public function mount($name)
    {
        $this->character = Character::fromSession();
        $this->label = $this->buildLabel(Str::replace('_path', '', $name));
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.form.image-field');
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
        $this->character->updateImage($value, $name);
    }

    /**
     * Remove the current image.
     *
     * @param  string  $name
     * @return void
     */
    public function removeImage($name)
    {
        $this->character->deleteImage($name);
    }
}

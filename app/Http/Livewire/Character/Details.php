<?php

namespace App\Http\Livewire\Character;

use App\Traits\HasACharacter;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Details extends Component
{
    use HasACharacter;
    use WithFileUploads;

    /**
     * Character appearance image.
     *
     * @var \Illuminate\Http\UploadedFile
     */
    public $appearance;

    /**
     * Character affiliation symbol image.
     *
     * @var \Illuminate\Http\UploadedFile
     */
    public $symbol;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        // Easy build of regular fields
        $rules = array_fill_keys($this->fields, 'nullable');

        // Extra fields
        $rules['appearance'] = 'image';
        $rules['symbol'] = 'image';

        return $rules;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.character.details');
    }

    /**
     * Take action(s) on update.
     *
     * @param  mixed  $name
     * @param  mixed  $value
     * @return void
     */
    public function updated($name, $value)
    {
        if(empty($value))
        {
            data_set($this, $name, null);
        }

        if($value instanceof TemporaryUploadedFile)
        {
            tap($this->character->{$name}, function($previous) use($name, $value) {
                $location = 'character-' . $name . 's';

                $this->character->{$name} = $value->storePublicly($location, 'public');

                if($previous)
                {
                    Storage::disk('public')->delete($previous);
                }
            });
        }

        $this->character->save();

        if($name === 'character.name')
        {
            $this->emit('characterUpdated');
        }
    }

    /**
     * Removes an image.
     *
     * @param  string  $image
     */
    public function removeImage($image)
    {
        Storage::disk('public')->delete($this->character->{$image});

        $this->character->{$image} = null;

        $this->character->save();
    }
}

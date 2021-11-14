<?php

namespace App\Http\Livewire\Fields;

use App\Livewire\Field;
use Illuminate\Support\Facades\Storage;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class FileUpload extends Field
{
    use WithFileUploads;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            $this->name => 'nullable',
        ];
    }

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $name
     * @return void
     */
    public function mount($label = null, $name)
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
        return view('livewire.fields.file-upload');
    }

    /**
     * Cleans the field name.
     *
     * @return string
     */
    public function getField()
    {
        return str_replace('character.', '', $this->name);
    }

    /**
     * Determine if the field is filled in.
     *
     * @return boolean
     */
    public function hasField()
    {
        return (data_get($this, $this->name));
    }

    /**
     * Prints the Alpine field name.
     *
     * @return string
     */
    public function getAlpineName()
    {
        return $this->getField() . 'Name';
    }

    /**
     * Prints the Alpine field preview.
     *
     * @return string
     */
    public function getAlpinePreview()
    {
        return $this->getField() . 'Preview';
    }

    /**
     * Prints the image src.
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->character->getImage($this->getField());
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
            data_set($this, $this->name, null);
        }

        if($value instanceof TemporaryUploadedFile)
        {
            tap($this->character->{$this->getField()}, function($previous) use($name, $value) {
                $location = 'character-' . $this->getField() . 's';

                data_set($this, $this->name, $value->storePublicly($location, 'public'));

                if($previous)
                {
                    Storage::disk('public')->delete($previous);
                }
            });
        }

        $this->character->save();
    }

    /**
     * Removes an image.
     *
     * @return void
     */
    public function removeImage()
    {
        Storage::disk('public')->delete(data_get($this, $this->name));

        data_set($this, $this->name, null);

        $this->character->save();
    }
}

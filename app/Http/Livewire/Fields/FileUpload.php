<?php

namespace App\Http\Livewire\Fields;

use App\Http\Livewire\Field;
use Illuminate\Support\Facades\Storage;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class FileUpload extends Field
{
    use WithFileUploads;

    /**
     * Create a new component instance.
     *
     * @param  string  $field
     * @param  string  $label
     * @return void
     */
    public function mount($field, $label = null)
    {
        $this->getCharacter();

        $this->field = $field;
        $this->label = $label;
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
        return str_replace('character.', '', $this->field);
    }

    /**
     * Determine if the field is filled in.
     *
     * @return boolean
     */
    public function hasField()
    {
        return (data_get($this, $this->field));
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
            data_set($this, $this->field, null);
        }

        if($value instanceof TemporaryUploadedFile)
        {
            tap($this->character->{$this->getField()}, function($previous) use($name, $value) {
                $location = 'character-' . $this->getField() . 's';

                data_set($this, $this->field, $value->storePublicly($location, 'public'));

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
        Storage::disk('public')->delete(data_get($this, $this->field));

        data_set($this, $this->field, null);

        $this->character->save();
    }
}

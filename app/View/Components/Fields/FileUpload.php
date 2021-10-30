<?php

namespace App\View\Components\Fields;

use App\Models\Character;
use Illuminate\View\Component;

class FileUpload extends Component
{
    /**
     * The character.
     *
     * @var \App\Models\Character
     */
    public $character;

    /**
     * The field ID.
     *
     * @var string
     */
    public $field;

    /**
     * The field label text.
     *
     * @var string
     */
    public $label;

    /**
     * Create a new component instance.
     *
     * @param  \App\Models\Character  $character
     * @param  string  $field
     * @param  string  $label
     * @return void
     */
    public function __construct(Character $character, $field, $label = null)
    {
        $this->character = $character;
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
        return view('components.fields.file-upload');
    }

    /**
     * Print the text for the wire:model attribute.
     *
     * @return string
     */
    public function wireModel()
    {
        return 'character.' . $this->field;
    }

    /**
     * Print the text for the Alpine data name.
     *
     * @return string
     */
    public function alpineName()
    {
        return $this->field . 'Name';
    }

    /**
     * Print the text for the Alpine data preview.
     *
     * @return string
     */
    public function alpinePreview()
    {
        return $this->field . 'Preview';
    }

    /**
     * Print the text for the Alpine data label.
     *
     * @return boolean
     */
    public function alpineLabel()
    {
        return ($this->label)
            ? 'true'
            : 'false'
            ;
    }

    /**
     * Print the text for the Alpine reference.
     *
     * @return string
     */
    public function alpineRef()
    {
        return '$refs.' . $this->field;
    }

    /**
     * Print the image src attribute.
     *
     * @return string
     */
    public function src()
    {
        return $this->character->getImage($this->field);
    }
}

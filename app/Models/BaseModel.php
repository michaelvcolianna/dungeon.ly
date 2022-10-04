<?php

namespace App\Models;

use App\Traits\MakesLabels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    use MakesLabels;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get validation rules.
     *
     * @return array
     */
    public static function validationRules()
    {
        $rules = [];

        $name = Str::singular((new static())->getTable());

        $fields = config(sprintf('fields.%s', $name));

        // Special processing for character sheet grouping
        if($name === 'character')
        {
            $fields = [];

            foreach(config('fields.character') as $group)
            {
                foreach($group as $field => $config)
                {
                    $fields[$field] = $config;
                }
            }
        }

        foreach($fields as $field => $config)
        {
            if(Str::contains($config['type'], ['string', 'text', 'image']))
            {
                $rules[sprintf('%s.%s', $name, $field)] = 'nullable';
            }
        }

        return $rules;
    }

    /**
     * Create a formatted string for field props.
     *
     * @param  string
     * @return string
     */
    protected function makeFieldProp($field)
    {
        return sprintf('%s_path', $field);
    }

    /**
     * Update an image.
     *
     * @param  \Illuminate\Http\UploadedFile  $image
     * @param  string  $field
     * @return void
     */
    public function updateImage(UploadedFile $image, $field)
    {
        $fieldProp = $this->makeFieldProp($field);
        $fieldDir = sprintf('%ss', $field);

        tap(
            $this->{$fieldProp},
            function($previous) use($image, $fieldProp, $fieldDir) {
                $this->forceFill([
                    $fieldProp => $image->storePublicly($fieldDir),
                ])->save();

                if($previous)
                {
                    Storage::delete($previous);
                }
            }
        );
    }

    /**
     * Delete an image.
     *
     * @param  string  $field
     * @return void
     */
    public function deleteImage($field)
    {
        $fieldProp = $this->makeFieldProp($field);

        if(is_null($this->{$fieldProp}))
        {
            return;
        }

        Storage::delete($this->{$fieldProp});

        $this->forceFill([
            $fieldProp => null,
        ])->save();
    }

    /**
     * Get an image URL.
     *
     * @param  string  $field
     * @return string
     */
    public function getImageUrl($field)
    {
        $fieldProp = $this->makeFieldProp($field);

        return $this->{$fieldProp}
            ? Storage::url($this->{$fieldProp})
            : null
        ;
    }

    /**
     * Friendly toggle for checkbox types.
     *
     * @return void
     */
    public function toggle()
    {
        if(in_array(
            'Illuminate\Database\Eloquent\SoftDeletes',
            class_uses($this)
        ))
        {
            if($this->trashed())
            {
                $this->restore();
            }
            else
            {
                $this->delete();
            }
        }
    }
}

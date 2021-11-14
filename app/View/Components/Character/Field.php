<?php

namespace App\View\Components\Character;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Field extends Component
{
    /**
     * The field's config.
     *
     * @var array
     */
    public $config;

    /**
     * The field name.
     *
     * @var string
     */
    public $name;

    /**
     * The field's group structure, if applicable.
     *
     * @var array
     */
    public $structure;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @return void
     */
    public function __construct($name)
    {
        if($config = config('dnd.' . $name))
        {
            $this->config = $config;
            $this->name = $name;
        }
        else
        {
            throw new \InvalidArgumentException('No config found for field ‘' . $name . '’.');
        }

        if(isset($this->config['groups']))
        {
            $this->structure = config('json.' . $this->config['template']);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.character.field');
    }

    /**
     * Get a field's linked attribute, if applicable.
     *
     * @return string
     */
    public function attribute()
    {
        return $this->config['attribute'] ?? null;
    }

    /**
     * Get a field's database column type.
     *
     * @return string
     */
    public function column()
    {
        if(!isset($this->config['column']) || empty($this->config['column']))
        {
            throw new \LogicException('Config for field ‘' . $this->name . '’ is missing a column definition.');
        }

        return $this->config['column'];
    }

    /**
     * Get a field's component.
     *
     * @param  string  $template
     * @return string
     */
    public function component($template = null)
    {
        $template ??= $this->template();

        return 'fields.' . $template;
    }

    /**
     * Get a field's property group keys.
     *
     * @return array
     */
    public function groups()
    {
        return $this->config['groups'] ?? null;
    }

    /**
     * Get a field's label.
     *
     * @param  string  $label
     * @param  string  $fallback
     * @return string
     */
    public function label($label = null, $fallback = null)
    {
        if(isset($this->config['label']))
        {
            $label = $this->config['label'];
        }

        $fallback ??= $this->name;

        return $label ?? Str::of($fallback)->replace('character.', null)->replace('_', ' ')->title();
    }

    /**
     * Get a field's number of rows, if applicable.
     *
     * @return integer
     */
    public function rows()
    {
        if($this->config['column'] === 'text')
        {
            return $this->config['rows'] ?? 5;
        }

        return null;
    }

    /**
     * Get a field's size in kb, if applicable.
     *
     * @return integer
     */
    public function size()
    {
        return $this->config['size'] ?? null;
    }

    /**
     * Get a field's JSON structure, if applicable.
     *
     * @return array
     */
    public function structure()
    {
        if($structure = config('dnd.' . $this->config['column'] . '.' . $this->template()))
        {
            return $structure;
        }

        return null;
    }

    /**
     * Get a field's template file name.
     *
     * @return string
     */
    public function template()
    {
        return $this->config['template'] ?? 'text';
    }

    /**
     * Determine if a field has grouped subfields to process.
     *
     * @return boolean
     */
    public function isGrouped()
    {
        return !empty($this->config['groups']);
    }

    /**
     * Determine if a field can display a Livewire component directly.
     *
     * @return boolean
     */
    public function isSimple()
    {
        return empty($this->structure());
    }
}

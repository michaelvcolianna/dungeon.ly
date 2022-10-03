<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait MakesLabels
{
    /**
     * Create a formatted label.
     *
     * @param  string  $name
     * @param  array  $config
     * @return string
     */
    public function buildLabel($name, $config = [])
    {
        return $config['label'] ?? Str::of($name)->replace('_', ' ')->title();
    }
}

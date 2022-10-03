<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Str;

trait ProcessesFieldsConfig
{
    /**
     * Loop through fields and add ones that aren't references.
     *
     * @param  \Illuminate\Database\Schema\Blueprint
     * @param  array  $fields
     * @return void
     */
    public function addFields(Blueprint &$table, $fields)
    {
        foreach($fields as $field => $config)
        {
            $type = $config['type'];

            if(Str::contains($type, ['string', 'text']))
            {
                $table->{$type}($field)->nullable();
            }

            if($type === 'image')
            {
                $table->string($field, 2048)->nullable();
            }
        }
    }
}

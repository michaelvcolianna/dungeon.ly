<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /** @var array */
    const FIELDS = [
        'string',
        'text',
        'checkbox',
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Form fields
        foreach(static::FIELDS as $component)
        {
            Blade::component('jetstream::components.field.'.$component, 'jet-field.'.$component);
        }

        // Standalones
        Blade::component('jetstream::components.link', 'jet-link');
        Blade::component('jetstream::components.link-button', 'jet-link-button');
        Blade::component('jetstream::components.section', 'jet-section');
    }
}

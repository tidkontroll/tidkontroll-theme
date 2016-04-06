<?php

namespace Tidkontroll\Theme\Providers;

use Tidkontroll\Providers\AggregateServiceProvider;

class ThemeServiceProvider extends AggregateServiceProvider
{
    /**
     * Holds all service providers we want to register
     *
     * @var array
     */
    protected $providers = [
        //
    ];

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tidkontroll');

        $this->publishes([
            __DIR__.'/../public' => public_path('tidkontroll/default-theme'),
        ], 'public');
    }
}

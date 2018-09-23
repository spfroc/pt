<?php

namespace Adobesun\Pt;

use Illuminate\Support\ServiceProvider;

class PtServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Pt::class, function () {
            return new Pt();
        });

        $this->app->alias(Pt::class, 'pt');
    }
}
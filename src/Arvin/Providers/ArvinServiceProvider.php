<?php

namespace Arvin\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class ArvinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'arvin');
        $this->publishes([
            __DIR__ . '/../../config/admin.php' => config_path('admin.php'),
            __DIR__ . '/../../resources/views' => base_path('resources/views/vendor/arvin'),
            __DIR__ . '/../../public' => public_path('vendor/arvin'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

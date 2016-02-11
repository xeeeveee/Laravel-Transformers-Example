<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TransformersProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Transformers\CategoryTransformerInterface', function($app)
        {
            return $this->app->make('App\Transformers\CategoryTransformer');
        });

        $this->app->bind('App\Transformers\PostTransformerInterface', function($app)
        {
            return $this->app->make('App\Transformers\PostTransformer');
        });
    }
}

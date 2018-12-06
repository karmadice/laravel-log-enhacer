<?php
/**
 * A service provider is a file that can tell the parent Laravel application about various offerings of the package
 *
 * Package does not need service provide if it doesn't autoload any resource in advance
 */

namespace karmadice\LaravelLogEnhancer\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelLogEnhancerServiceProvider extends ServiceProvider
{

    /**
     * Publishes configuration file.
     *
     * triggered with : php artisan vendor:publish -tag=laravel-log-enhancer-config
     *
     * @return void
     */

    public function boot()
    {
        $this->publishes(
            [
                __DIR__.'/../config/laravel_log_enhancer.php' => config_path('laravel_log_enhancer')],
            'laravel-log-enhancer-config'
        );
    }

    /**
     * Make Config publishment optional by merging the config from the package
     *
     * @return void
     */

    public function register()
    {
        $this->mergeConfigFrom(
          __DIR__.'/../config/laravel_log_enhancer.php',
          'laravel_log_enhancer'
        );
    }
}
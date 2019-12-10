<?php

namespace Botdigit\Blockchain;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class BlockchainServiceProvider extends ServiceProvider {
    /*
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */

    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        include __DIR__ . '/../Http/routes.php';
        $config = realpath(__DIR__ . '/../resources/config/blockchain.php');

        $this->publishes([
            $config => config_path('blockchain.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('laravel-blockchain', function() {
            return new Blockchain;
        });
    }

    /**
     * Get the services provided by the provider
     * @return array
     */
    public function provides() {
        return ['laravel-blockchain'];
    }

}

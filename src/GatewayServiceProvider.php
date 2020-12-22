<?php

namespace Larabookir\Gateway;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class GatewayServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Actual provider
     *
     * @var \Illuminate\Support\ServiceProvider
     */
    protected $provider;

    /**
     * Create a new service provider instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct($app)
    {
        parent::__construct($app);

//        $this->provider = $this->getProvider();
    }

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $config = __DIR__ . '/../config/gateway.php';
        $migrations = __DIR__ . '/../migrations/';
        $views = __DIR__ . '/../views/';

        //php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=config
        $this->publishes([
            $config => config_path('gateway.php'),
        ], 'config')
        ;

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=migrations
        $this->publishes([
            $migrations => base_path('database/migrations')
        ], 'migrations');

        $this->loadMigrationsFrom($migrations);

        $this->loadViewsFrom($views, 'gateway');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=views
        $this->publishes([
            $views => base_path('resources/views/vendor/gateway'),
        ], 'views');
	}

    /**
     * Return ServiceProvider according to Laravel version
     *
     * @return \Intervention\Image\Provider\ProviderInterface
     */
    private function getProvider()
    {
        if (version_compare(\Illuminate\Foundation\Application::VERSION, '5.0', '<')) {
            $provider = 'Larabookir\Gateway\GatewayServiceProviderLaravel4';
        }elseif (version_compare(\Illuminate\Foundation\Application::VERSION, '5.0', '>=') && version_compare(\Illuminate\Foundation\Application::VERSION, '6.0', '<')) {
            $provider = 'Larabookir\Gateway\GatewayServiceProviderLaravel5';
        }else {
            $provider = 'Larabookir\Gateway\GatewayServiceProviderLaravel6';
        }

        return new $provider($this->app);
    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->singleton('gateway', function () {
            return new GatewayResolver();
        });
	}
}

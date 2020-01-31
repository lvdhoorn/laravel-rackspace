<?php

namespace Invato\Rackspace;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/Rackspace.php' => config_path('Rackspace.php')
        ], 'config');

        \Auth::provider('Rackspace', function ($app, array $config) {
            return new \Invato\Rackspace\Providers\RackspaceProvider();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Invato\Rackspace\Rackspace', 'Rackspace'];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Invato\Rackspace\Rackspace', function ($app) {
            $Rackspace = new Rackspace($app);
            $Rackspace->connection($Rackspace->getDefaultConnection());

            return $Rackspace;
        });

        $this->app->alias('Invato\Rackspace\Rackspace', 'Rackspace');
    }
}

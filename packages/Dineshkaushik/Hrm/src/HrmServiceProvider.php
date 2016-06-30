<?php namespace Dineshkaushik\Hrm;

use Illuminate\Support\ServiceProvider;

class HrmServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var  bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

	//if (!$this->app->routesAreCached()) {
		require __DIR__.'/../routes.php';
	 //   }
	

        $this->loadViewsFrom(__DIR__.'/views', 'hrm');

	$this->publishes([
		__DIR__.'/../config/hrm.php' => config_path('hrm.php')
	    ], 'config');

	$this->publishes([
		__DIR__.'/views' => resource_path('views/vendor/hrm'),
	    ]);
        
	$this->publishes([
		__DIR__.'/../assets' => public_path('vendor/hrm')
	    ], 'assets');
	

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['hrm'] = $this->app->share(function($app)
        {
            return new Hrm;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['hrm'];
    }

}

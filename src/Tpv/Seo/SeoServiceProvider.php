<?php namespace Tpv\Seo;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('tpv/seo');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		// $this->app->bind('seo', 'Tpv\Seo\Seo');
		$this->app['seo'] = $this->app->share(function($app){
	    return new Seo;
	  });
		$this->app->booting(function(){
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Seo', 'Tpv\Seo\Facades\Seo');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('seo');
	}

}

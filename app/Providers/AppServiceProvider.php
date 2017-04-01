<?php

namespace Rocket\Providers;

use Rocket\View\Composers;
use Rocket\View\ThemeViewFinder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->setFinder($this->app['theme.finder']);

        $this->app['view']->composer('layouts.frontend', Composers\InjectPages::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('theme.finder', function($app){            
            $finder = new ThemeViewFinder($app['files'], $app['config']['view.paths']);
            $config = $app['config']['rocket.theme'];
            $finder->setBasePath($app['path.public'].'/'.$config['folder']);
            $finder->setActiveTheme($config['active']);
            return $finder;
        });
    }
}

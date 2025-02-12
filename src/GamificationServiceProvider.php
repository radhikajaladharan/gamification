<?php
namespace salesfokuz\gamification;

use Illuminate\Support\ServiceProvider;

class GamificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('gamification', function () {
            return new Gamification();
        });
    }

    public function boot()
    {
        // Load Routes, Migrations, Config, etc.
        
         // Publish the config file
         $this->publishes([
            __DIR__.'/../config/gamification.php' => config_path('gamification.php'),
        ], 'config');

        // Publish migration files
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        
        // Publish routes if needed
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}

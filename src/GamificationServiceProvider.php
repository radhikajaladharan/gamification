<?php
namespace Salesfokuz\Gamification;

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
    }
}

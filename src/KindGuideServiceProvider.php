<?php
namespace KindGuide;

use Illuminate\Support\ServiceProvider;

class KindGuideServiceProvider extends ServiceProvider
{
    public function register()
    {
        /*
        $this->app->bind('wikiworldorder-survloop', function()
        {
            return new Demo;
        });
        */
    }

    public function boot()
    {
        require __DIR__ . '/routes.php';
        //$migFile = '2016_11_20_000000_KindGuide_create_tables.php';
        $this->publishes([
              __DIR__.'/Views'         => base_path('resources/views/vendor/kindguide'),
              __DIR__.'/Public'        => base_path('public/kindguide'),
              __DIR__.'/Models'        => base_path('app/Models/KindGuide'),
              __DIR__.'/Models'        => base_path('app/Models'),
              __DIR__.'/Uploads'       => base_path('storage/app/up/kindguide'),
              /* __DIR__.'/Database/' . $migFile 
                  => base_path('database/migrations/' . $migFile),
              __DIR__.'/Database/KindGuideSeeder.php' 
                  => base_path('database/seeds/KindGuideSeeder.php'), */
        ]);
        //$this->loadViewsFrom(__DIR__ . '/Views', 'survloop');
    }
}
<?php
namespace KindGuide;

use Illuminate\Support\ServiceProvider;

class KindGuideServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'kindguide');
        $this->publishes([
              __DIR__.'/Views'         => base_path('resources/views/vendor/kindguide'),
              __DIR__.'/Models'        => base_path('app/Models'),
              __DIR__.'/Uploads'       => base_path('storage/app/up/kindguide'),
              
              __DIR__.'/Database/2018_11_30_000000_kindguide_create_tables.php'
                  => base_path('database/migrations/2018_11_30_000000_kindguide_create_tables.php'),
              __DIR__.'/Database/KindGuideSeeder.php' => base_path('database/seeds/KindGuideSeeder.php'),
        ]);
    }
}

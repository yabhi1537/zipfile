<?php

namespace App\Providers;

use App\Models\SeoSettingsModel;
use App\Models\SettingModel;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view) {
           $data = SettingModel::all();
            $view->with(['SettingModel' => $data[0] ]);
        });

        view()->composer('*', function($view) {
            $data = SeoSettingsModel::all();
             $view->with(['meta' => $data[0] ]);
         });
    }
}

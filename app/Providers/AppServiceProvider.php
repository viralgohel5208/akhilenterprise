<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Models\Header;
use App\Models\Footer;
use App\Models\GeneralSettings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void{
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void{
        view()->composer('*', function ($view) {
            $headerData = Header::where('id', 1)->first();
            $footerData = Footer::where('id', 1)->first();
            $settings = GeneralSettings::where('id', 1)->first();
            $view->with([
                'headerData' => $headerData,
                'footerData' => $footerData,
                'settings' => $settings,
            ]);
        });
    }
}

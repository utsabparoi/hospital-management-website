<?php

namespace App\Providers;

use App\Models\WebsiteInformationModel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        if ( !app()->runningInConsole() ){
            $WebsiteInformation = WebsiteInformationModel::find(1);
            View::Share(compact("WebsiteInformation"));
        }
    }
}

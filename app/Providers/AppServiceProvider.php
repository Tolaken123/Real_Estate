<?php

namespace App\Providers;

use App\Models\location\CityProvince;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

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

        view()->composer(['frontend.include.property-filter'], function ($view) {
            $provinces = CityProvince::query()
                ->select('id', 'name')
                ->get();
            $view->with([
                'provinces' => $provinces,
            ]);
        });

    }
}

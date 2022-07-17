<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Models\location\CityProvince;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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

        view()->composer(['frontend.include.property-filter'], function ($view) {
            $provinces = CityProvince::query()
                ->select('id', 'name')
                ->get();
            $property_types = Category::query()
                ->select('id', 'name')
                ->get();
            $max_price_ranges = Property::query()
                ->select('price')
                ->orderBy('price', 'ASC')
                ->limit(10)
                ->pluck('price');

            $min_price_ranges = Property::query()
                ->select('price')
                ->orderBy('price', 'DESC')
                ->limit(10)
                ->pluck('price');


            $max_price_ranges = collect($max_price_ranges)
                ->sortBy(function ($value) {
                    return $value;
                });

            $view->with([
                'provinces' => $provinces,
                'property_types' => $property_types,
                'min_price_ranges' => $min_price_ranges,
                'max_price_ranges' => $max_price_ranges
            ]);
        });

        Blade::if('admin', function () {
            return Auth::user()->admin;
        });

    }
}

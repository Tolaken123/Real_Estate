<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\location\CityProvince;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $provinces = CityProvince::query()
            ->select('id', 'name')
            ->get();

        $sale_properties = Property::query()->sale()->take(8)->get();
        $rent_properties = Property::query()->rent()->take(8)->get();

        return view('frontend.home', [
            'provinces' => $provinces,
            'sale_properties' => $sale_properties,
            'rent_properties' => $rent_properties
        ]);
    }
}

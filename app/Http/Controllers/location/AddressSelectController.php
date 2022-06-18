<?php

namespace App\Http\Controllers\location;

use App\Http\Controllers\Controller;
use App\Models\location\CityProvince;
use App\Models\location\Commune;
use App\Models\location\District;
use App\Models\location\Village;
use Illuminate\Http\Request;

class AddressSelectController extends Controller
{
    public function provinces()
    {
        $provinces = CityProvince::query()->get();
        return response()->json(['data' => $provinces]);
    }

    public function districts(Request $request)     
    {
        $districts = District::query()
            ->when($request->input('province_id'), function ($query) use ($request) {
                return $query->where('province_id', $request->input('province_id'));
            })
            ->get();
        return response()->json(['data' => $districts]);
    }

    public function communes(Request $request)
    {
        $communes = Commune::query()
            ->when($request->input('district_id'), function ($query) use ($request) {
                return $query->where('district_id', $request->input('district_id'));
            })
            ->get();
        return response()->json(['data' => $communes]);
    }

    public function villages(Request $request)
    {
        $villages = Village::query()
            ->when($request->input('commune_id'), function ($query) use ($request) {
                return $query->where('commune_id', $request->input('commune_id'));
            })
            ->get();
        return response()->json(['data' => $villages]);
    }
}

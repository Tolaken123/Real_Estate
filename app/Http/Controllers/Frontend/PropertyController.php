<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::query()
            ->when($request->listing_type && $request->listing_type == 'Rent', function ($query) {
                return $query->rent();
            })->when($request->listing_type && $request->listing_type == 'Sale', function ($query) {
                return $query->sale();
            })
            ->paginate();
        return view('frontend.properties.index', [
            'properties' => $properties
        ]);
    }

    public function detail($id)
    {
        $property = Property::query()->findOrFail($id);
        return view('frontend.properties.detail', [
            'property' => $property
        ]);
    }
}

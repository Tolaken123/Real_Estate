<?php

namespace App\Http\Controllers\Frontend;

use App\Builders\PropertyBuilder;
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $min_price = $request->input('min_price') ?? null;
        $max_price = $request->input('max_price') ?? null;
        $properties = Property::query()
            ->with([
                'province:id,name',
                'images:id,image,property_id',
                'user:id,name,phone,avatar'
            ])
            ->when($request->listing_type && $request->listing_type == 'Rent', function ($query) {
                return $query->rent();
            })->when($request->listing_type && $request->listing_type == 'Sale', function ($query) {
                return $query->sale();
            })
            ->when($request->input('category_id'), function ($query) use ($request) {
                return $query->where('category_id', $request->input('category_id'));
            })
            ->when($request->input('province_id'), function ($query) use ($request) {
                return $query->where('province_id', $request->input('province_id'));
            })
            ->when($min_price && empty($max_price), function ($query) use ($min_price) {
                return $query->where('price', '<=', (int)$min_price);
            })
            ->when($max_price && empty($min_price), function ($query) use ($max_price) {
                return $query->where('price', '>=', (int)$max_price);
            })
            ->when($max_price && $min_price, function ($query) use ($min_price, $max_price) {
                return $query->whereBetween('price', [(int)$min_price, (int)$max_price]);
            })
            ->paginate(20);

        return view('frontend.properties.index', [
            'properties' => $properties
        ]);
    }

    public function detail($id)
    {
        $property = Property::query()
            ->with([
                'province:id,name',
                'images:id,image,property_id',
                'user:id,name,phone'
            ])->findOrFail($id);

        $related_properties = Property::query()
            ->when($property->listing_type == "Rent", function (PropertyBuilder $query) {
                return $query->rent();
            })->when($property->listing_type == "Sale", function (PropertyBuilder $query) {
                return $query->sale();
            })
            ->whereNotIn('id', [$property->id])
            ->take(12)
            ->get();


        return view('frontend.properties.detail', [
            'property' => $property,
            'related_properties' => $related_properties
        ]);
    }

    public function agent_properties()
    {
         dd('here');
    }
}

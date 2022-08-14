<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\location\Commune;
use App\Models\location\Village;
use App\Models\location\District;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\location\CityProvince;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            ->paginate($this->default_paginate);
        return view('admin.properties.index', compact('properties'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()
            ->select('id', 'name')
            ->get();
        $user = User::get(['id', 'name']);
        $provinces = CityProvince::query()
            ->select('id', 'name')
            ->get();
        return view('admin.properties.createproperty', compact("categories", "provinces", "user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'listing_type' => 'required|string|max:255',
            'province_id' => 'required|string|max:255',
            'district_id' => 'required|string|max:255',
            'commune_id' => 'required|string|max:255',
            'village_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'bedroom' => 'required|string|max:255',
            'bathroom' => 'required|string|max:255',
            'landsize' => 'required|string|max:255',
            'floor' => 'required|string|max:255',
            'dimension' => 'required|string|max:255',
            'maplocation' => 'required|string|max:255',
            'description' => 'required|string',
            'filesname.*' => 'array|required', 'files.*' => 'required|mimetypes:image/jpg,image/jpeg,image/bmp',
        ]);


        $properties = Property::create([
            'name' => $request->name,
            'bedroom' => $request->bedroom,
            'province_id' => $request->province_id,
            'district_id' => $request->district_id,
            'commune_id' => $request->commune_id,
            'village_id' => $request->village_id,
            'category_id' => $request->category_id,
            'bathroom' => $request->bathroom,
            // 'stock' => $request->stock,
            'price' => $request->price,
            'floor' => $request->floor,
            'landsize' => $request->landsize,
            'dimension' => $request->dimension,
            'maplocation' => $request->maplocation,
            'description' => $request->description,
            'filename.*' => $request->filename,
            'listing_type' => $request->listing_type,
            'user_id' => Auth::id()
        ]);

        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = public_path() . '/images/';
            $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();

            $file->move($destinationPath, $file_name);

            $properties->update([
                'thumbnail' => $file_name
            ]);
        }
        //  dd($file_name);


        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $destinationPath = public_path() . '/images/';
                $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $file_name);
                $image = Image::create([
                    'property_id' => $properties->id,
                    'image' => $file_name
                ]);
            }
        }
        // dd($property);
        return redirect()->route('admin.properties.index')->with('properties', 'property create succassfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Property::find($id);
        $provinces = CityProvince::query()
            ->select('id', 'name')
            ->get();
        $district = District::query()
            ->select('id', 'name')
            ->get();
        $commune = Commune::query()
            ->select('id', 'name')
            ->get();
        $village = Village::query()
            ->select('id', 'name')
            ->get();
        $categories = Category::query()
            ->select('id', 'name')
            ->get();
        return view('admin.properties.editproperty',
            [
                'properties' => $properties,
                'provinces' => $provinces,
                'categories' => $categories,
                'district' => $district,
                'commune' => $commune,
                'village' => $village
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $this->validate($request, [
            'listing_type' => 'required|string|max:255',
            'province_id' => 'required|string|max:255',
            'district_id' => 'required|string|max:255',
            'commune_id' => 'required|string|max:255',
            'village_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'stock' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'bedroom' => 'required|string|max:255',
            'bathroom' => 'required|string|max:255',
            'landsize' => 'required|string|max:255',
            'floor' => 'required|string|max:255',
            'dimension' => 'required|string|max:255',
            'maplocation' => 'required|string|max:255',
            'description' => 'required|string',
            'filesname.*' => 'array|required', 'files.*' => 'required|mimetypes:image/jpg,image/jpeg,image/bmp',
        ]);
        $properties = Property::findOrFail($id);
        $properties->update($request->only([
            'name',
            'listing_type',
            'bedroom',
            'province_id',
            'district_id',
            'commune_id',
            'village_id',
            'category_id',
            'bathroom',
            'price',
            'floor',
            'landsize',
            'dimension',
            'maplocation',
            'description',
            'stock',
            'user_id'
        ]));


        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = public_path() . '/images/';
            $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();

            $file->move($destinationPath, $file_name);

            $properties->update([
                'thumbnail' => $file_name
            ]);
        }

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $destinationPath = public_path() . '/images/';
                $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $file_name);
                $image = Image::create([
                    'property_id' => $properties->id,
                    'image' => $file_name
                ]);
            }
        }


        return redirect()->route('admin.dashboard')->with('properties', 'property update succassfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = Property::findOrFail($id);
        $properties->delete();
        return redirect()->route('admin.dashboard')->with('properties', 'property delete succassfully');
    }

}

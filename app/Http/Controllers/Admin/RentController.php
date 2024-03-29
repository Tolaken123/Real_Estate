<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rent;
use App\Models\Image;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\location\CityProvince;

class RentController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:properties-list|properties-create|properties-edit|properties-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:properties-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:properties-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:properties-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::query()
            ->orderBy('id', 'DESC')
            ->when(\request('q'), function ($query) {
                $query->where('name', 'like', '%' . request('q', '%'));
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
        $provinces = CityProvince::query()
            ->select('id', 'name')
            ->get();

        return view('admin.properties.rentform', compact("categories", "provinces"));
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
            'name' => 'required|string|max:255',
            'rentalprice' => 'required|string|max:255',
            'bedroom' => 'required|string|max:255',
            'bathroom' => 'required|string|max:255',
            'landsize' => 'required|string|max:255',
            'floor' => 'required|string|max:255',
            'dimension' => 'required|string|max:255',
            'maplocation' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            // 'files' => 'required',
            // 'files.*' => 'array|required', 'files.*' => 'required|mimetypes:image/jpg,image/jpeg,image/bmp' ,
        ]);

        $rent = new Rent();
        $rent->name = $request->name;
        $rent->rentalprice = $request->rentalprice;
        $rent->bedroom = $request->bedroom;
        $rent->bathroom = $request->bathroom;
        $rent->floor = $request->floor;
        $rent->landsize = $request->landsize;
        $rent->dimension = $request->dimension;
        $rent->maplocation = $request->maplocation;
        $rent->description = $request->description;
        $rent->save();


        if ($request->hasfile('filename')) {

            foreach ($request->file('filename') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $data[] = $name;
            }
        }

        return redirect('admin/rent')->with('rent', 'rent create succassfully');


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

        $rents = Rent::find($id);

        $categories = Category::query()
            ->select('id', 'name')
            ->get();

        return view('admin.properties.editrentform', compact("rents", "categories"));
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

        $this->validate($request, [
            'category_id' => 'required',
            'location_id' => 'required',
            'name' => 'required',
            'rentalprice' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'landsize' => 'required',
            'floor' => 'required',
            'dimension' => 'required',
            'maplocation' => 'required',
            'description' => 'required',
        ]);
        $rents = Rent::find($id);
        $rents->name = $request->name;
        $rents->category_id = $request->category_id;
        $rents->location_id = $request->location_id;
        $rents->rentalprice = $request->rentalprice;
        $rents->bedroom = $request->bedroom;
        $rents->bathroom = $request->bathroom;
        $rents->floor = $request->floor;
        $rents->landsize = $request->landsize;
        $rents->dimension = $request->dimension;
        $rents->maplocation = $request->maplocation;
        $rents->description = $request->description;
        $rents->update();
        return redirect('admin/rent')->with('rent', 'rent update succassfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id​
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rent = Rent::findOrFail($id);
        if ($rent->delete()) {
            return redirect('admin/rent')->with('Messege', 'deleted successfully');;
        }
        return abort(404);
    }


}

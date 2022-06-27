<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Inventery;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Image;
use App\Models\location\CityProvince;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()
            ->select('id','name')
            ->get();
        $provinces = CityProvince::query()
            ->select('id','name')
            ->get();

        return view('admin.properties.createproperty',compact("categories","provinces"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'listing_type'=>'required|string|max:255',
            'province_id'=>'required|string|max:255',
            'district_id'=>'required|string|max:255',
            'commune_id'=>'required|string|max:255',
            'village_id'=>'required|string|max:255',
            'name' =>'required|string|max:255',
            'rentalprice'=>'required|string|max:255',
            'bedroom'=>'required|string|max:255',
            'bathroom'=>'required|string|max:255',
            'landsize'=>'required|string|max:255',
            'floor'=>'required|string|max:255',
            'dimension'=>'required|string|max:255',
            'maplocation'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'filesname.*' => 'array|required', 'files.*' => 'required|mimetypes:image/jpg,image/jpeg,image/bmp' ,
        ]);


        $property = Properties::create([
            'name' => $request->name,
            'listing_type' => $request->listing_type,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,

        ]);

        if($request->hasfile('filename'))
        {
            foreach ($$request->hasfile('filename') as $file) {
                $destinationPath = public_path().'/images/';
                $file_name = time() . "." . $files->getClientOriginalExtension();
                $file->move($destinationPath, $file_name);
                $image = Image::create([
                    'property_id' => $property->id,
                    'image' => $file_name
                ]);
            }
        }
    // dd($property);
        return redirect()->route('admin.properties.index')->with('properties','property create succassfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

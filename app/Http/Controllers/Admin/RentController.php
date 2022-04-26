<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent=Rent::all();
        return view('admin.properties.rentlist',compact('rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.properties.rentform');
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
            'name' =>'required',
            'rentalprice'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'landsize'=>'required',
            'housesize'=>'required',
            'houseno'=>'required',
            'dimension'=>'required',
            'street'=>'required',
            'maplocation'=>'required',
            'description'=>'required',

        ]);
        $rent = new Rent();
        $rent->name=$request->name;
        $rent->rentalprice=$request->rentalprice;
        $rent->bedroom=$request->bedroom;
        $rent->bathroom=$request->bathroom;
        $rent->housesize=$request->housesize;
        $rent->landsize=$request->landsize;
        $rent->houseno=$request->houseno;
        $rent->dimension=$request->dimension;
        $rent->street=$request->street;
        $rent->maplocation=$request->maplocation;
        $rent->description=$request->description;
        $rent->save();
        // dd($rent);
        return redirect('admin/rent')->with('rent','rent create succassfully');
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

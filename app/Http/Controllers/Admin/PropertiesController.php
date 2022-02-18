<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\properties;
use PhpParser\Builder\Property;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View('Admin.properties.properties');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'house'=>'required',
            'street'=>'required',
            'tourist'=>'required',
            'hospital'=>'required',
            'bank'=>'required',
            'shopping'=>'required',
            'resturant'=>'required',
            'datetime'=>'required',
            'date'=>'required',
            'month'=>'required',
            'week'=>'required',
            'time'=>'required'

        ]);
     $properties=new properties();
     $properties->name=$request->name;
     $properties->phone=$request->phone;
     $properties->email=$request->email;
     $properties->house=$request->input('house');
     $properties->street=$request->input('street');
     $properties->tourist=$request->input('tourist');
     $properties->hospital=$request->input('hospital');
     $properties->bank=$request->input('bank');
     $properties->shopping=$request->input('shopping');
     $properties->resturant=$request->input('resturant');
     $properties->datetime=$request->datetime;
     $properties->date=$request->date;
     $properties->month=$request->input('month');
     $properties->week=$request->input('week');
     $properties->time=$request->time;
     $properties->save();
    // dd($properties);
     return redirect('/admin/properties')->with('Properties','Create proprties is Successful');

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

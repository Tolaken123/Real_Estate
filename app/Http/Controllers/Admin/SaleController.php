<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale=Sale::all();
        return view('admin.properties.salelist',compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.properties.saleform');
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
            'saleprice'=>'required',
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
        $sale = new Sale();
        $sale->name=$request->name;
        $sale->saleprice=$request->saleprice;
        $sale->bedroom=$request->bedroom;
        $sale->bathroom=$request->bathroom;
        $sale->housesize=$request->housesize;
        $sale->landsize=$request->landsize;
        $sale->houseno=$request->houseno;
        $sale->dimension=$request->dimension;
        $sale->street=$request->street;
        $sale->maplocation=$request->maplocation;
        $sale->description=$request->description;
        $sale->save();
        // dd($sale);
        return redirect('admin/sale')->with('rent','rent create succassfully');
    
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

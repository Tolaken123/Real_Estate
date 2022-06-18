<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Image;
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale=Sale::query()
        ->orderBy('id','DESC')
        ->when(\request('q'),function($query){
            $query->where('name','like', '%' . request('q','%'));
        })
        ->paginate($this->default_paginate);
        // $cat=Inventery::get("id",'inventery');
        return view('admin.properties.salelist',['sale'=>$sale]);
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
            'name' =>'required|string|max:255',
            'saleprice'=>'required|string|max:255',
            'bedroom'=>'required|string|max:255',
            'bathroom'=>'required|string|max:255',
            'landsize'=>'required|string|max:255',
            'floor'=>'required|string|max:255',
            'dimension'=>'required|string|max:255',
            'maplocation'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            // 'files' => 'required',
            // 'files.*' => 'array|required', 'files.*' => 'required|mimetypes:image/jpg,image/jpeg,image/bmp' ,
        ]);
        $sale = new Sale();
        $sale->name=$request->name;
        $sale->saleprice=$request->saleprice;
        $sale->bedroom=$request->bedroom;
        $sale->bathroom=$request->bathroom;
        $sale->floor=$request->floor;
        $sale->landsize=$request->landsize;
        $sale->dimension=$request->dimension;
        $sale->maplocation=$request->maplocation;
        $sale->description=$request->description;
        $sale->save();
        // dd($sale);
        // if($request->hasfile('files'))
        // {
        //    foreach($request->file('files') as $image)
        //    {
        //        $name = time().'.'.$image->extension();
        //        $image->move(public_path().'/files/', $name);  
        //        $data[] = $name;  
               
        //    }
        // }
        //     $file= new Image();
        //        $file->files=json_encode($data);
        //        $file->sale_id=$sale->id;
        //        $file->save();
       return redirect('admin/sale')->with('sale','sale create succassfully');
    
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
        $sale =Sale::find($id);
        return view('admin.properties.editsaleform',compact("sale"));
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
        $this->validate($request, [
            'name' =>'required',
            'saleprice'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'landsize'=>'required',
            'floor'=>'required',
            'dimension'=>'required',
            'maplocation'=>'required',
            'description'=>'required',

        ]);
        $sale=Sale::find($id);
        $sale->name=$request->name;
        $sale->saleprice=$request->saleprice;
        $sale->bedroom=$request->bedroom;
        $sale->bathroom=$request->bathroom;
        $sale->floor=$request->floor;
        $sale->landsize=$request->landsize;
        $sale->dimension=$request->dimension;
        $sale->maplocation=$request->maplocation;
        $sale->description=$request->description;
        $sale->update();
    //     $sale=$request->all();
    //     // $rent['inventery'] = $request->input('inventery');
    // //   //    $rent->name=$request->name;
    //      Sale::where('id',$id)->update($sale);
        return redirect('admin/sale')->with('sale','sale update succassfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale=Sale::findOrFail($id);
        if ($sale->delete()){
            return redirect('/admin/sale');
        }
        return abort(404);
    }
}

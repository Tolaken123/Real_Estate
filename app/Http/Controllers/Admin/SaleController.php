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
            'name' =>'required|string|max:255',
            'saleprice'=>'required|string|max:255',
            'bedroom'=>'required|string|max:255',
            'bathroom'=>'required|string|max:255',
            'landsize'=>'required|string|max:255',
            'floor'=>'required|string|max:255',
            'houseno'=>'required|string|max:255',
            'dimension'=>'required|string|max:255',
            'street'=>'required|string|max:255',
            'maplocation'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'files' => 'required',
            'files.*' => 'array|required', 'files.*' => 'required|mimetypes:image/jpg,image/jpeg,image/bmp' ,
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
        if($request->hasfile('files'))
        {
           foreach($request->file('files') as $image)
           {
               $name = time().'.'.$image->extension();
               $image->move(public_path().'/files/', $name);  
               $data[] = $name;  
               
           }
        }
            $file= new Image();
               $file->files=json_encode($data);
               $file->sale_id=$sale->id;
               $file->save();
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
            'housesize'=>'required',
            'houseno'=>'required',
            'dimension'=>'required',
            'street'=>'required',
            'maplocation'=>'required',
            'description'=>'required',

        ]);
        $sale=$request->all();
        // $rent['inventery'] = $request->input('inventery');
    //   //    $rent->name=$request->name;
         Sale::where('id',$id)->update($sale);
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
        $sale=Rent::findOrFail($id);
        if ($rent->delete()){
            return redirect('/admin/sale');
        }
        return abort(404);
    }
}

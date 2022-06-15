<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Inventery;
use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Image;
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
        // $cat=Inventery::get("id",'inventery');
        return view('admin.properties.rentlist',['rent'=>$rent]);
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
            'name' =>'required|string|max:255',
            'rentalprice'=>'required|string|max:255',
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
      
        $rent = new Rent();
        $rent->name=$request->name;
        $rent->rentalprice=$request->rentalprice;
        $rent->bedroom=$request->bedroom;
        $rent->bathroom=$request->bathroom;
        $rent->floor=$request->floor;
        $rent->landsize=$request->landsize;
        $rent->dimension=$request->dimension;
        $rent->maplocation=$request->maplocation;
        $rent->description=$request->description;
        $rent->save();
        
        // if($request->hasfile('files'))
        //  {
        //     foreach($request->file('files') as $image)
        //     {
        //         $name = time().'.'.$image->extension();
        //         $image->move(public_path().'/files/', $name);  
        //         $data[] = $name;  
                
        //     }
        //  }
        //      $file= new Image();
        //         $file->files=json_encode($data);
        //         $file->rent_id=$rent->id;
        //         $file->save();
        return redirect('admin/rent')->with('rent','rent create succassfully');
        // if($request->hasfile('imageFile')) {
        //     foreach($request->file('imageFile') as $file)
        //     {
        //         $name = $file->getClientOriginalName();
        //         $file->move(public_path().'/uploads/', $name);  
        //         $imgData[] = $name;  
        //     }
        //     $fileModal = new Image();
        //     $fileModal->image= json_encode($imgData);
        //     $fileModal->image_id= json_encode($imgData);
        //     $fileModal->save();
//    dd($rent);
    
   

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
        $rents =Rent::find($id);
        return view('admin.properties.editrentform',compact("rents"));
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
            'rentalprice'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'landsize'=>'required',
            'floor'=>'required',
            'houseno'=>'required',
            'dimension'=>'required',
            'maplocation'=>'required',
            'description'=>'required',

        ]);
    //     $rent=$request->all();
    //     // $rent['inventery'] = $request->input('inventery');
    // //   //    $rent->name=$request->name;
    //      Rent::where('id',$id)->update($rent);
    $rents =Rent::find($id);
    $rents->name=$request->name;
    $rents->rentalprice=$request->rentalprice;
    $rents->bedroom=$request->bedroom;
    $rents->bathroom=$request->bathroom;
    $rents->floor=$request->floor;
    $rents->landsize=$request->landsize;
    $rents->houseno=$request->houseno;
    $rents->dimension=$request->dimension;
    $rents->street=$request->street;
    $rents->maplocation=$request->maplocation;
    $rents->description=$request->description;
    $rents->update();
        return redirect('admin/rent')->with('rent','rent update succassfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id​
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rent=Rent::findOrFail($id);
        if ($rent->delete()){
            return redirect('admin/rent')->with('Messege','deleted successfully');;
        }
        return abort(404);
    } 
     
    
}

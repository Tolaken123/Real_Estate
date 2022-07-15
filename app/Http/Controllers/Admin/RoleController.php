<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Controllers\Controller;

// use Illuminate\Support\Facades\Mail;
// use App\Mail\RoleMail;
class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $datas = $request->all();
        // $lang_ = session()->get('locale')?session()->get('locale'):1;
    
        // if($request->hasFile('feature_image')){
        //     $datas['feature_image'] = $this->uploadImage($request);
        // }
        $datas['user_id']= Auth::user()->id;
        $roles = Role::create($datas);
         return redirect()->route('admin.roles.index')->with('success', 'Role have been created successfully');
    }

    public function index()
    {  
        //  $lang_ = session()->get('locale')?session()->get('locale'):1;
        

        $roles = Role::orderBy('id', 'desc')->paginate(20);
        return view('admin.role.roleList', ['roles'=> $roles]);
    }

    public function create()
    {

        return view('admin.role.roleForm' , []);
    }

    public function edit($id)
    {
        $role = Role:: where("id", $id)->firstOrFail();
        return view('admin.role.roleForm', ['role'=> $role]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $datas = $request->all();
        if($request->hasFile('feature_image')){
            $datas['feature_image'] = $this->uploadImage($request);
        }
        $role->update($datas);
        return redirect()->route('admin.roles.index')->with('success', 'Role have been updated successfully');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('admin.roles.index')->with('success', 'Role have been deleted successfully');
    }

    public function show(Request $request){
        return redirect()->route('admin.roles.index');
    }

    private function uploadImage(Request $request)
    {
    //     $image = $request->file('feature_image');
    //     $name = time().'.'.$image->getClientOriginalName();

    //     $destinationPath = public_path('images/');
    //     $image->move($destinationPath, $name);
    //     return 'images/'.$name;
     }
}

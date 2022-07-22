<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
class ProfielController extends Controller
{  
    public function store(){

    }
    public function Profile(){
        $user = Auth::user();
        return view('Auth.Account.updateprofile',array('user'=>Auth::user()));
    }
   public function update(Request $request)
    {
        $user = Auth::user();

        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];


        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = public_path() . '/images/';
            $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();

            $file->move($destinationPath, $file_name);

            $user->update([
                'avatar' => $file_name
            ]);
        }
        // dd($user);
        // return redirect('/admin/profile/'.Auth::user()->id)->with('success', 'User has been updated!!');
        return redirect()->route('admin.dashboard');

    }
}

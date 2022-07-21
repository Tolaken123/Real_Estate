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
   public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->update($request->only([
            'name',
            'email',
            'phone',
        ]));

        if ($request->password) {
            $users->update([
                'password' => Hash::make($request['password'])
            ]);
        }

        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = public_path() . '/images/';
            $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();

            $file->move($destinationPath, $file_name);

            $users->update([
                'avatar' => $file_name
            ]);
        }
        dd($users);
        return redirect()->route('admin.user.index')->with('success', 'User have been updated successfully');

    }
}

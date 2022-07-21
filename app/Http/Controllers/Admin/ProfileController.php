<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
        return view('Auth.Account.updateprofile',array('user'=>Auth::user()));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::findOrFail($id);
        $user->update($request->only([
            'name',
            'email',
            'phone',
        ]));

        if ($request->password) {
            $user->update([
                'password' => Hash::make($request['password'])
            ]);
        }

        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = public_path() . '/images/';
            $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();

            $file->move($destinationPath, $file_name);

            $user->update([
                'avatar' => $file_name
            ]);
        }
        return redirect()->route('admin.user.index')->with('success', 'User have been updated successfully');

    
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

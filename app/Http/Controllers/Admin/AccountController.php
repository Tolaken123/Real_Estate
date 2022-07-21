<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()
            ->orderBy('id', 'DESC')
            ->when(\request('q'), function ($query) {
                $query->where('name', 'like', '%' . request('q', '%'));
            })
            ->paginate($this->default_paginate);
        return view('admin.Account.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Account.userform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            // 'phone' => 'required',
            // // 'sex' => 'required',
            // 'password' => 'required|same:confirm-password',
            'avatar' => 'required',
            // 'role'=>'required',


        ]);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','User created successfully');

    
                        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request['password']),
        ]);
        
       
        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);
    
        // $user = User::create($input);
        // $user->assignRole($request->input('roles'));
    
        // return redirect()->route('users.index')
        //                 ->with('success','User created successfully');


        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = public_path() . '/images/';
            $file_name = date('m-d-Y') . '-' . time() . uniqid() . "." . $file->getClientOriginalExtension();

            $file->move($destinationPath, $file_name);

            $user->update([
                'avatar' => $file_name
            ]);
        }
        return redirect()->route('admin.user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.Account.edituserform', compact("users"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
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
        return redirect()->route('admin.user.index') ->with('success','User updated successfully');


        // $users=User::findOrFail($id);
        // dd($users);
        // return redirect()->route('admin.user.index') ->with('success','User updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        // $users=user::deleted($id);
        return redirect()->route('admin.user.index')->with('user', 'user delete succassfully');
    }

    private function uploadImage(Request $request)
    {
        $image = $request->file('avatar');
        $name = time() . '.' . $image->getClientOriginalName();
        $destinationPath = public_path('images/');
        $image->move($destinationPath, $name);
        return 'images/' . $name;
    }
}

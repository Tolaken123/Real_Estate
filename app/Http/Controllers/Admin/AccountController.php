<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        // $users = User::paginate(15)->fragment('users');
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'sex' => 'required',
            'password' => 'required|same:confirm-password',

        ]);
<<<<<<< HEAD

=======
>>>>>>> 1c23d6466fd95257f7f77930a460f0c1c794893f

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
<<<<<<< HEAD
                        ->with('success','User created successfully');
=======
            ->with('success', 'User created successfully');
>>>>>>> 1c23d6466fd95257f7f77930a460f0c1c794893f


        $user = User::create([
            'name' => $request->name,
            'sex' => $request->sex,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone

        ]);

        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);

        // $user = User::create($input);
        // $user->assignRole($request->input('roles'));

        // return redirect()->route('users.index')
        //                 ->with('success','User created successfully');
<<<<<<< HEAD

=======
>>>>>>> 1c23d6466fd95257f7f77930a460f0c1c794893f


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
        $users = User::find($id);
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

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'sex' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'profile' => 'required'
        ]);
<<<<<<< HEAD

        $users=User::findOrFail($id);

        return redirect()->route('admin.user.index') ->with('success','User updated successfully');
=======

        $users = User::findOrFail($id);

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully');

        // $users=User::findOrFail($id);
        // dd($users);
        // return redirect()->route('admin.user.index') ->with('success','User updated successfully');
>>>>>>> 1c23d6466fd95257f7f77930a460f0c1c794893f

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
}

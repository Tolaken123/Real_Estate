<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        // $users=User::query()
        // ->orderBy('id','DESC')
        // ->when(\request('q'),function($query){
        //     $query->where('name','like', '%' . request('q','%'));
        // })
        // ->paginate($this->default_paginate);
        $users = User::paginate(15)->fragment('users');
        return view('admin.Account.list',['users'=>$users]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $user = User::create([
            'name' => $request->name,
            'sex' => $request->sex,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone

        ]);


        return redirect()->route('admin.user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users =User::find($id);
        // $users->name=$request->name;
        // $users->sex=$request->sex;
        // $users->=$request->name;
        // $users->name=$request->name;
        // $users->name=$request->name;

        return view('admin.Account.edituserform',compact("users"));
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
      $users=User::findOrFail($id);
        $users->update($request->only([
            'name',
            'sex',
            'email',
            'phone',
            'password'
        ]));

        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::findOrFail($id);
          $users->delete();
        // $users=user::deleted($id);
          return redirect()->route('admin.user.index')->with('user','user delete succassfully');
    }
}

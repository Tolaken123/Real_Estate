<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::query()
            ->orderBy('id', 'DESC')
            ->when(\request('q'), function ($query) {
                $query->where('name', 'like', '%' . request('q', '%'));
            })
            // ->when(!Auth::user()->admin,function($query){
            //     $query->WhereIn('user_id',[Auth::id()]);
            // })
            ->paginate($this->default_paginate);
        // $cat=Inventery::get("id",'inventery');

        $users_counts = User::count();
        $sales_property_count = Property::query()->sale()->count();
        $rents_property_count = Property::query()->rent()->count();

        $user=User::get(['id','name']);


        return view('admin.dashboard', [
            'properties' => $properties,
            'users_count' => $users_counts,
            'sales_property_count' => $sales_property_count,
            'rents_property_count' => $rents_property_count,
            'property_count' => $sales_property_count + $rents_property_count,

            'user'=>$user,


        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

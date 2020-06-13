<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use App\User;
use App\Phone;

class UserController extends Controller
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
        //
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
        //
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
        //
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

    public function search(Request $request)
    {
        $users = User::orderBy('name', 'asc');
        if (isset($request->id))
            $users = $users->where('id', $request->id);
        if (isset($request->name))
            $users = $users->where('name', 'like', '%' . $request->name . '%');
        if (isset($request->class))
            $users = $users->where('class', $request->class);
        $users = $users->get();
        return view('search_user', ['users' => $users]);
    }
    
    public function search2(Request $request)
    {
        $users = User::orderBy('name', 'asc');
        if (isset($request->id))
            $users->where('id', $request->id);
        if (isset($request->phone)){
            //$users = Phone::where('number',$request->phone)->first()->user();
            // $users = Phone::where('number', $request->phone)->find(1);
            $phone = $request->phone;
            $users->whereHas('phone', function (Builder $query) use ($phone) {
                $query->where('number', $phone);
            });
        }          
            
        if (isset($request->role)) {
            $role = $request->role;
            $users->whereHas('role', function (Builder $query) use ($role) {
                $query->where('name', $role);
            });
        }
        $users = $users->get();
        //dd($users);
        return view('search_user2', ['users' => $users]);
    }
}

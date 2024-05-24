<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Models\AccessLevel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::All();
       
        return view('pages.users.index')
            ->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accessLevel =AccessLevel::All();
        return view('pages.users.form')
        ->with('accessLevels',$accessLevel);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
        ]);

        User::create($request->all());
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Request $request)
    {
        $accessLevel =AccessLevel::All();

        $user = User::find($id);
        return view('pages.users.form')
            ->with('id', $id)
            ->with('user',$user)
            ->with('accessLevels',$accessLevel);
           
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        
        $request->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        if($request->password){ 
            $password = Hash::make($request->passwordd);           
           
        }else{
            $password= $user->password;
        }
        $request->merge([
            'password' => $password,
        ]);
        
        $user->update($request->all());
        return redirect('/users');

        // dd($id);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

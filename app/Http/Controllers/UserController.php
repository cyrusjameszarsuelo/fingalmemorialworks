<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

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
        return view('pages.users.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     
    //    dd(  $request->password);
    // $request->password= Hash::make($request->password);

    $request->merge([
        'password' => Hash::make($request->password),
    ]);
   
    User::create($request->all());
        // dd($request->all());
        
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
    public function edit()
    {
        return view('pages.users.form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

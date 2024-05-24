<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch = Branch::All();
        return view('pages.branches.index')
            ->with('branches', $branch);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('pages.branches.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Branch::create($request->all());

        return redirect('/branches');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch, Request $request, String $id )
    {
        $branch = Branch::find($id);
        return view('pages.branches.form')
            ->with('branch',$branch)
            ->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch, String $id)
    {
        $branch = Branch::find($id);
        $branch->update($request->all());

        return redirect('/branches');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        //
    }
}

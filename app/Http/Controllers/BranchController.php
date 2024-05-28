<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $request->validate(self::formRule());
        Branch::create($request->all());

        return redirect('/branches')
            ->with('success','Created Successfully!');
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
        $request->validate(self::formRule($id));
        $branch = Branch::find($id);
        $branch->update($request->all());

        return redirect('/branches')
            ->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        //
    }
    public function formRule($id = false){
        return [
            "code"    => ['required','string', Rule::unique('branches')->ignore($id ? $id : "")],
            "name"   => ['required','string'],
            "address1"   => ['required','string'],
            "address2"   => ['required','string'],
            "address3"   => ['required','string'],
            "postcode"   => ['required','string'],
            "town"   => ['required','string'],
            "county"   => ['required','string'],
            "phone"   => ['required','string'],
        ];
    }
}

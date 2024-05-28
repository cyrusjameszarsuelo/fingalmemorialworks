<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::All();
        return view('pages.categories.index')
            ->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(self::formRule());
        Category::create($request->all());
        return redirect('/categories')
             ->with('success','Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,String $id)
    {
        $category = Category::find($id);
        return view('pages.categories.form')
            ->with('id',$id)
            ->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category,String $id)
    {
        $request->validate(self::formRule($id));
            $category = Category::find($id);
            $category->update($request->all());
            return redirect('/categories')
                ->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
    public function formRule($id = false){
        return [
            "code"    => ['required','string', Rule::unique('categories')->ignore($id ? $id : "")],
            "name"   => ['required','string']
        ];
    }
}

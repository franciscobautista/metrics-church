<?php

namespace App\Http\Controllers;
use App\Db\Subcategory;
use App\Db\Category;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories  = Subcategory::all();
        return view('subcategories.index',compact('categories'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategories()
    {
        $categories  = Subcategory::select('id','name','description','slug')->get();
        return response()->json($categories,200);
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  =  Category::Where('organization_id',\Session::get('organization_id'))->get();
        return view('subcategories.new',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['organization_id'] = \Session::get('organization_id');
        Subcategory::create($data);
        return redirect('/settings/categories')->with('success', 'Categoría agregada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Subcategory::Where('slug',$slug)->first();
        return response()->json($category,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories  =  Category::Where('organization_id',\Session::get('organization_id'))->get();
        return view('subcategories.edit',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Subcategory $category)
    {
        $data = request()->all();
        $category->update($data);
        return redirect('/settings/categories')->with('success','Categoría actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategory::destroy($id);
        return redirect('/settings/categories')->with('success', 'Categoría eliminada correctamente!');
    }
}

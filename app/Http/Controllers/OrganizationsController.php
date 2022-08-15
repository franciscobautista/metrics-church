<?php

namespace App\Http\Controllers;
use App\Db\Category;
use App\Db\Subcategory;
use App\Db\ServiceTime;
use App\Db\ServiceType;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
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
    public function edit($section=null)
    {
        $categories  =  Category::Where('organization_id',\Session::get('organization_id'))->get();
        $subcategories  =  Subcategory::Where('organization_id',\Session::get('organization_id'))->get();
        $service_times  =  ServiceTime::Where('organization_id',\Session::get('organization_id'))->get();
        $service_types  =  ServiceType::Where('organization_id',\Session::get('organization_id'))->get();
        return view("organizations.edit",compact('section','categories','subcategories','service_times','service_types'));
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
}

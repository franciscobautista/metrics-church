<?php

namespace App\Http\Controllers;
use App\Db\ServiceTime;
use App\Db\ServiceType;
use Illuminate\Http\Request;

class ServiceTimesController extends Controller
{
    public function index()
    {
        $service_times = ServiceTime::all();
        dd("perra");
            return view('/serviceTimes/index',compact('service_times'));

    }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_types  =  ServiceType::Where('organization_id',\Session::get('organization_id'))->get();
        return view('servicetimes.new',compact('service_types'));
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
        ServiceTime::create($data);
        return redirect('/settings/service_times')->with('success', 'Servicio agregado correctamente!');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceTime $service)
    {
         $service_types  =  ServiceType::Where('organization_id',\Session::get('organization_id'))->get();
        //$service=ServiceTime::where("id",$id)->first();
        return view('servicetimes.edit',compact('service','service_types'));
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceTime $service)
    {
        $data = request()->all();
        $service->update($data);
        return redirect('/settings/service_times')->with('success','Servicio actualizado correctamente');
    }
      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceTime::destroy($id);
        return redirect('/settings/service_times')->with('success', 'Servicio eliminado correctamente!');
    }
}

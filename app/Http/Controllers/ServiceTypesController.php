<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Db\ServiceType; 
use Illuminate\Support\Facades\Log;
class ServiceTypesController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()) // This is what I am needing.
        {  
            $data = $request->all();
            //Log::info(print_r($request->all(), true));
            $serv=ServiceType::where("name",trim($request->name))->first();
            if(!empty($serv)){
                return (object)["services"=>[],"success"=>false,"message"=>"El servicio ya existe","idserv"=>0];
            }
            $servNew=  ServiceType::create(["name"=>$request->name, "description"=>$request->description,'organization_id'=> \Session::get('organization_id')]);
            $service_types  =  ServiceType::Where('organization_id',\Session::get('organization_id'))->get();

            return (object)["services"=>$service_types,"success"=>true,"idserv"=>$servNew->id,"message"=>"Servicio agregado con éxito."];
        }else{  
             $data['organization_id'] = \Session::get('organization_id');   
            ServiceType::create($data);
            return redirect('/settings/services')->with('success', 'Typo de Servicio agregado correctamente!');
        }
       
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('servicetypes.new' );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceType $service) {
        return view('servicetypes.edit',compact('service' ));
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceType $service)
    {
        $data = request()->all();
        $service->update($data);
        return redirect('/settings/services')->with('success','Servicio actualizado correctamente');
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceType::destroy($id);
        return redirect('/settings/services')->with('success', 'Servicio eliminado correctamente!');
    }
}

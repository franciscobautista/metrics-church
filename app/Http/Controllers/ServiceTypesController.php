<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Db\ServiceType; 

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
        $data = $request->all();
        $data['organization_id'] = \Session::get('organization_id');   
        ServiceType::create($data);
        return redirect('/servicetimes/create')->with('success', 'Typo de Servicio agregado correctamente!');
    }
}

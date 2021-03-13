<?php

namespace App\Http\Controllers;
use App\Db\ServiceTime;
use Illuminate\Http\Request;

class ServiceTimesController extends Controller
{
    public function index()
    {
        $service_times = ServiceTime::all();
        return view('/service_times/index',compact('service_times'));

    }
}

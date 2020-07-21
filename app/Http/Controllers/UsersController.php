<?php
namespace App\Http\Controllers;

use App\Db\Person;
use App\Db\User;
use App\Db\JobPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    private $company_id;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->company_id = Session::get('company_id');
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Form create new user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job_positions = JobPosition::Where('company_id',$this->company_id)->get();
        return view('users.new',compact('job_positions'));
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
        \Log::info($data);
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
            'first_name' => 'required',
        ]);
        
        $person = Person::create($data);
        $data['person_id'] = $person->id;
        $data['recovery_password'] = uniqid();
        User::create($data);

        //$request->session()->flash('message', 'Usuario agregado correctamente!');
        //\Log::info(Session::get('message') );
        return redirect('/users')->with('message', 'Usuario agregado correctamente!');
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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact($user) );
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

<?php
namespace App\Http\Controllers;

use App\Db\Person;
use App\Db\User;
use App\Db\CompanyUser;
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
        $users_company = CompanyUser::Where('company_id',$this->company_id)->With('user.person.job_position')->get();
        return view('users.index', compact('users_company'));
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
        $user = User::create($data);

        CompanyUser::create(['user_id'=> $user->id, 'company_id' => $this->company_id]);
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
    public function update(User $user)
    {
        $data = request()->all();
        $user->update($data);

        if(request()->hasFile('photo') )
        {
            $fileName=rand(1,99).'-'.request()->photo->getClientOriginalName();
            request()->photo->move(storage_path('app/photos'), $fileName);
            $data['photo'] = $fileName;
        }
        $user->person->update($data);

        return redirect('/profile')->with('success','Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/users')->with('message', 'Usuario eliminado correctamente!');
    }
}

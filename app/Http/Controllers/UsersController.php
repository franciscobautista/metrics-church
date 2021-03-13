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
    private $organization_id;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->organization_id = Session::get('organization_id');
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
        $organization_user = OrganizationUser::Where('organization_id',$this->organization_id)->With('user.person')->get();
        return view('users.index', compact('organization_user'));
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
        return view('users.new');
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
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
            'first_name' => 'required',
        ]);
        
        $person = Person::create($data);
        $data['person_id'] = $person->id;
        $data['recovery_password'] = uniqid();
        $user = User::create($data);

        CompanyUser::create(['user_id'=> $user->id, 'company_id' => $this->company_id]);
        return redirect('/users')->with('success', 'Usuario agregado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($section=null)
    {
        return view('users.profile',compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $job_positions = JobPosition::Where('company_id',$this->company_id)->get();
        return view('users.edit',compact('user','job_positions') );
    }

    /**
     * Update profileUser
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
            request()->photo->move(storage_path('/app/public/photos'), $fileName);
            $data['photo'] = $fileName;
        }
        $user->person->update($data);

        return back()->with('success','Datos actualizados correctamente');
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
        return redirect('/users')->with('success', 'Usuario eliminado correctamente!');
    }

    /**
     * Change password
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        if(\Hash::check($request->current_password, \Auth::user()->password) )
        {
            $request->validate([
                'password' => 'required|confirmed|min:6',
            ]);
            User::Where('id',\Auth::id())->update(['password'=>\Hash::make($request->password)]);
            return redirect('/profile/password')->with('success','Contraseña actualizada correctamente');
        }
        else
            return redirect('/profile/password')->with('error','Tu contraseña actual es incorrecta');


        
    }
}

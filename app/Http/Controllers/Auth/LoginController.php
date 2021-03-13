<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Db\User;
use Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function login()
    {
        return view('auth/login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, 'password' => $password,'status'=>'active' ];
        \Log::info($request->all());
        if(Auth::attempt($credentials, $request->remember))
        {
            //Update last Access
            User::where('id',\Auth::id())->update(['last_access'=>date("Y-m-d H:i:s")]);
            if(isset(\Auth::user()->organizations[0]))
                Session::put('organization_id',\Auth::user()->organizations[0]->organization_id);
            
            //Get the associated company
            if ($request->ajax())
                return response()->json([
                    'success' => true,
                    'url' => Session::get('url.intended', url('requests'))
                ],201);
            return redirect()->intended('/home');

        }else{

            if ($request->ajax())
            {
                return response()->json([
                    'success' => false,
                    'error' => 'Usuario o contraseña incorrectos'
                ],201);
            }
            return redirect('/')
                ->withInput($request->only('email'))
                ->withErrors(['Usuario o contraseña incorrectos']);;
        }
        
    }
}

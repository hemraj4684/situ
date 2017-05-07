<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Auth,Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

   use AuthenticatesAndRegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
   protected $redirectTo = '/';
    
    protected $redirectPath = '/home';
    
    protected $redirectAfterLogout = '/home';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            
            'co_name' => 'required|max:255',
            //'co_pan_no' => 'required|unique:users|regex:/([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}/',
            'co_add' => 'required',
            'co_cont_name' => 'required',
            'co_cont_no' => 'required|unique:users|numeric',
            'co_adhar_no' =>'required|unique:users|regex:/[0-9]{12}/',
            
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'co_name' => $data['co_name'],
            'co_add' => $data['co_add'],
            'co_cont_name' => $data['co_cont_name'],
            'co_cont_no' => $data['co_cont_no'],
            'co_adhar_no' => $data['co_adhar_no']
        ]);
    }

    public function getLogin() {

        return view('auth.login');
    }

    public function postLogin(Request $req)
    {
       //dd($req->name);
       if (Auth::attempt(['name' => $req->name, 'password' => $req->password])) {
            $user = Auth::user();
            Session::put('role',$user->role);
            return redirect()->intended('home');
        }
        else{
            //dd('hi');
            $req->session()->flash('status', 'User Credentials are not matched!');
            return redirect('login');
        }
    }
}

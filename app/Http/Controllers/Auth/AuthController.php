<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\news;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }



    public  function getLogin(){

        return view('auth.login');

    }
    
    public   function postLogin(){

        return 'postLogin';

    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {


       $this -> validate($request , [
            'name'     => 'required|max:255',
            'password' => 'required',
            ]);

        $name = $request -> input('name');
        $pass = $request -> input('password');


        if(Auth::attempt([ 'name' => $name,'password' => $pass ]))
        {
            Auth::logout(); 
            return redirect('admin');
        }
        else
        {
            return redirect('/');
        }

    }

    public function getLogout(){

        Auth::logout(); 
        
        return redirect('/');

    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
}

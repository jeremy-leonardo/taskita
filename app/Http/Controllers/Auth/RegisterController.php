<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user,user_email'],
            'password' => ['required', 'string', 'min:6', 'max:64'],
            'password-confirmation' => ['required', 'same:password'],
            'phone-number' => ['required', 'numeric', 'max:999999999999999999', 'unique:user,user_phone_number'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $this->userValidator($request->all())->validate();
        $user = User::create([
            'user_name' => $request['name'],
            'user_email' => $request['email'],
            'user_password' => bcrypt($request['password']),
            'user_phone_number' => $request['phone-number'],
        ]);
        return redirect()->intended('/login');
    }

    public function showHomeRegister()
    {
        return view('auth.home.index', ['mode' => 'register']);
    }
    
    public function showHomeLogin()
    {
        return view('auth.home.index', ['mode' => 'login']);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
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
    
    public function redirectTo()
    {   
        if(Auth::user()){
            return 'app';
    } 
       
    }
          
    
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'username'=>['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
        [
            'password.min' => 'Le mot de passe doit comporter au moins 8 caractères.',
            'email.unique' => 'Ce email existe déja',
            'username.unique' => 'Ce username existe déja',
            'phone.unique' => 'Ce numéro existe déja',
            'password.required'=>'le mot de passe est obligatoire',
            'first_name.required' => 'Ce champ est obligatoire',
            'last_name.required' => 'Ce champ est obligatoire',
            'email.required' => 'Ce champ est obligatoire',
            'username.required' => 'Ce champ est obligatoire',
            'phone.required' => 'Ce champ est obligatoire',
        ]
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'username'=>$data['username'],
            'phone' =>$data['phone'],
            'type' =>'investor',
            'password' => Hash::make($data['password']),
        ]);
    }
}

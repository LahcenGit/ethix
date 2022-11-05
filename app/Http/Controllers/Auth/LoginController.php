<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesUsers;

    
    


    public function login(Request $request)
    {   

        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => ['required'],
        ],
        [
            'username.required' => 'Ce champ est obligatoire',
            'password.required' => 'Ce champ est obligatoire',
        ]
    );
            $user = User::where('username',$input['username'])->first();
            $user_email = User::where('email',$input['username'])->first();
            if($user){
            if($user->status == 5){
                $error = 'Votre compte à été désactivé.';
                return view('auth.login',compact('error'));
            }
            }
            if($user_email){
            if($user_email->status == 5){
                $error = 'Votre compte à été désactivé.';
                return view('auth.login',compact('error'));
            }
            }
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
        
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {
            if(auth::user()->type == 'admin'){
                return redirect('dashboard-admin');
            }
            else {
                    return redirect('app');
                }
                
          
        }
        else{
            $error = 'Coordonnées incorrectes. Veuillez réessayer.';
            return view('auth.login',compact('error'));
            }
          
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
        {
            $error = null;
            return view('auth.login',compact('error'));
        }
}

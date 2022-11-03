<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (auth()->user()->type == 'admin') {
            return '/dashboard-admin';
        }
        else {
            return '/app';
        }

    }

    

    public function reset(Request $request)
    {
           $validatoe = $request->validate([
                'token' => 'required',
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:8|confirmed|regex:/[A-Z]/|regex:/[0-9]/',
                ],
                [
                'password.min' => '8 caractères , 1 majuscule , 1 chiffre',
                'password.regex' =>'8 caractères , 1 majuscule , 1 chiffre ',
                'email.email' => 'e-mail doit être une adresse e-mail valide.',
                'email.required' => 'Ce champ est obligatoire',
                'email.exists' => 'Nous ne trouvons pas d utilisateur avec cette adresse e-mail.',
                'password.required'=>'le mot de passe est obligatoire',
            ]);
            auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
             ]);
            $user = User::where('email',$request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            if ($user->type == 'admin') {
                return redirect('/dashboard-admin');
            }
            else {
                return redirect('/app');
            }
    }
    
}

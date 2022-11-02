<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin',function(){
            return Auth::user()->type == 'admin';
           });

           VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Ethix - Vérification Email')
                ->line('Click the button below to verify your email address.')
                ->action('Verify Email Address', $url)
                ->view('vendor.notifications.email');
        });

        ResetPassword::toMailUsing(function ($notifiable, $token) {
            $url = route('password.reset',$token).'?email='.$notifiable->getEmailForPasswordReset();
            return (new MailMessage())
                ->subject('Ethix - Mot De Passe Oublié')
                ->view('vendor.notifications.reset-password', compact('url'));
        });
    }

}

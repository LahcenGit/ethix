@extends('layouts.front')

@section('content')
<div class="container" style="margin-top: 150px; margin-bottom:200px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#4DAA7F ; color:#ffff ; padding:15px; " >{{ __('Vérifiez votre adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success"  role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre e-mail en cliquant sur un lien de vérification envoyé par mail. ') }}
                    {{ __("Si vous n'avez pas reçu l'e-mail") }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: #4DAA7F">{{ __('cliquez ici pour le renvoyer') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

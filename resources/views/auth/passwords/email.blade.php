@extends('layouts.front')

@section('content')
<div class="container" style="margin-top: 150px; margin-bottom:200px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#4DAA7F ; color:#ffff ; padding:15px; ">{{ __('Mot de passe oublié') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        Nous avons envoyé votre lien de réinitialisation de mot de passe par e-mail !
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="row mb-3 d-flex justify-content-center">
                            <div class="text-center">
                              <p style="color: #024670;">{{ __('Indiquez votre email pour recevoir un nouveau mot de passe') }}</p>
                            </div>
                            <br>
                            <div class="col-md-6 mt-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:#4DAA7F ; color:#ffff ; border-color:#4DAA7F">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

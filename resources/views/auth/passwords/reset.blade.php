@extends('layouts.front')
@section('content')


        <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">

                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Bienvenue! </h2>
                        <p class="sigle-para mt-2"> Réinitialisation du mot de passe</p>
                        <form class="login-wrapper-contents-form custom-form" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="single-input mt-4">

                                <input class="form--control @error('email') is-invalid @enderror" type="text" value="{{old('email')}}" placeholder="Email " name="email" required>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="single-input mt-4">

                                <input class="form--control @error('password') is-invalid @enderror" type="password" placeholder="Mot de passe" name="password" required>
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                    @if(!$errors->any())
                                        <p>8 caractères,1 majuscule,1 chiffre</p>
                                    @endif
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                            <div class="single-input mt-4">

                                <input class="form--control " type="password" placeholder="Confirmer le mot de passe" name="password_confirmation" required>

                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit"> Réinitialisation</button>

                        </form>

                     </div>
                </div>
            </div>
        </div>

@endsection

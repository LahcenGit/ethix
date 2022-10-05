@extends('layouts.front')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
<section class="login-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img src="{{asset('Front/assets/img/single-page/login.jpg')}}" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Bienvenue! </h2>
                        <p class="sigle-para mt-2"> Connectez-vous pour continuer</p>
                        <form class="login-wrapper-contents-form custom-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email Ou User Name </label>
                                <input class="form--control" type="text" placeholder="Email Ou User Name" name="username">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Mot de passe </label>
                                <input class="form--control" type="password" placeholder="Mot de passe" name="password">
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <div class="single-checkbox mt-3">
                                <div class="checkbox-inline">
                                    <input class="check-input" type="checkbox" id="check15" name="remember_me">
                                    <label class="checkbox-label" for="check15"> Se souvenir de moi </label>
                                </div>
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit"> Connectez</button>
                            <span class="account color-light mt-3">Vous n'avez pas de compte ? <a class="color-one" href="signup.html"> S'inscrire maintenant </a> </span>
                        </form>
                        
                     </div>
                </div>
            </div>
        </div>
    </section>

@endsection
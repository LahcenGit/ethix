@extends('layouts.front')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
 <!-- login Area Starts -->
 <section class="l-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img src="{{asset('Front/assets/img/single-page/login.jpg')}}" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Bienvenue! </h2>
                        <form class="login-wrapper-form custom-form padding-top-20" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-flex-item">
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Nom </label>
                                    <input class="form--control" type="text" name="first_name" placeholder="Nom" required>
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Prénom </label>
                                    <input class="form--control" type="text" name="last_name" placeholder="Prénom" required>
                                </div>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> User Name </label>
                                <input class="form--control" type="text" name="username" placeholder="User name"required>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email  </label>
                                <input class="form--control" type="text" name="email" placeholder="Email"required>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> N° de téléphone </label>
                                <input class="form--control" type="tel" id="phone" name="phone"required>
                            </div>
                            <div class="input-flex-item">
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Mot de passe </label>
                                    <input class="form--control" type="password" name="password" placeholder="******"required>
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Confirmer le mot de passe </label>
                                    <input class="form--control" type="password" name="password_confirmation" placeholder="******"required>
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkbox-inline mt-4">
                                <input class="check-input" type="checkbox" id="check15">
                                <label class="checkbox-label" for="check15"> En créant un compte, vous acceptez les <a class="color-one" href="javascript:void(0)">conditions d'utilisation   </a> et <a class="color-one" href="javascript:void(0)"> les conditions, </a>, 
                                    ainsi que <a class="color-one" href="javascript:void(0)"> la politique de confidentialité </a> </label>
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit"> S'inscrir</button>
                            <span class="account color-light mt-3"> Vous avez un déja un compte? <a class="color-one" href="login.html"> Connecter </a> </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
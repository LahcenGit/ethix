@extends('layouts.front')
@section('content')
     <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                   
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Bienvenue ! </h2>
                        <p class="sigle-para mt-2"> Connectez-vous pour continuer</p>
                        <form class="login-wrapper-contents-form custom-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="single-input mt-4">
                                
                                <input class="form--control @error('username') is-invalid @enderror" type="text" placeholder="email ou nom d'utilisateur" name="username" required>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                            </div>
                            <div class="single-input mt-4">
                               <input class="form--control @error('password') is-invalid @enderror" type="password" placeholder="mot de passe" name="password" required>
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <div class="happy">
                                @error('password')
                                <span class="invalid-feedback" role="alert" style="display: block !important">
                                    <span>{{ $message }}</span>
                                </span>
                                 @enderror
                            </div>
                            @if($error) 
                            <div class="alert alert-danger mt-3" role="alert">
                                <span style="font-size: 15px;">  {{$error}}  </span>
                            </div>
                            @endif
                            <div class="single-checkbox mt-3">
                                <div class="checkbox-inline">
                                    <input class="check-input" type="checkbox" id="check15" name="remember_me">
                                    <label class="checkbox-label" for="check15"> Se souvenir de moi </label>
                                </div>
                                <div class="forgot-password">
                                <a href="{{url('password/reset')}}" class="forgot-btn color-one"> Mot de passe oublié </a>
                            </div>
                            </div>
                           
                            <button class="submit-btn w-100 mt-4" type="submit"> Connectez</button>
                            
                            <span class="account color-light mt-3">Vous n'avez pas de compte ? <a class="color-one" href="{{asset('/register')}}"> Créer un compte maintenant </a> </span>
                        </form>
                        
                     </div>
                </div>
            </div>
        </div>

@endsection
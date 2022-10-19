@extends('layouts.front')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif

@include('investor.header-investor')

    <!-- Breadcrumb area end -->

        <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                   <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Profil! </h2>
                        <p class="sigle-para mt-2"> Modifier votre informations</p>
                         <form class="login-wrapper-contents-form custom-form" method="POST" action="{{url('app/profil/'.$user->id)}}">
                         <input type="hidden" name="_method" value="PUT">
                            @csrf
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Nom :</label>
                                <input class="form--control" type="text" value="{{$user->first_name}}" name="first_name" >
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Prénom :</label>
                                <input class="form--control" type="text" value="{{$user->last_name}}" name="last_name" >
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email :</label>
                                <input class="form--control" type="text" value="{{$user->email}}" name="email">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> User name :</label>
                                <input class="form--control" type="text" value="{{$user->username}}" name="username">
                            </div>
                            <div class="single-input mt-4">
                            <label class="label-title mb-3">Un nouveau mot de passe ? <p style="font-size: 15px; font-weight:450; margin-bottom : -2px;">(Laissez le champ vide si vous voulez garder l'ancien)</p></label>
                                <input class="form--control" type="password"  name="password">
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit"> Enregistrer</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
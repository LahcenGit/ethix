@extends('layouts.front')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif



@include('investor.header-investor')

    @if($user->status == 0)
    
    <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
        <div class="login-wrapper login-shadow bg-white">
            <div class="login-wrapper-flex">
               <div class="login-wrapper-contents login-padding text-center">
                    <i style="color: #024670;" class="fas fa-frown-open fa-2xl" ></i>
                    <p style="color: #024670;" class="sigle-para mt-2">Désolé ! Votre compte n'est pas encore validé</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb area end -->
       @else
        <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                   <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> {{$property->designation}}</h2>
                        <p class="sigle-para mt-2">Vous êtes entrain d'acheter des éthixs</p>
                         <form class="login-wrapper-contents-form custom-form" method="POST" action="{{url('app/store-ethix')}}">
                          @csrf
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Solde :</label>
                                <input class="form--control" type="text" value="{{$user->solde}}" name="solde" disabled >
                              
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Max Ethix :</label>
                                <input class="form--control" type="text" value="{{$max_ethix}}" name="max_ethix" disabled>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Nbr Ethix :</label>
                                <input class="form--control" type="number" @if($message)style="border-color:red ;"@endif value="" name="nbr_ethix" placeholder="{{$nbr_ethix}}" required>
                                @if($message)
                                    <span style="font-size: 14px; color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @endif
                            </div>
                            <input type = "hidden" value="{{$property->id}}" name = "property">
                            <button class="submit-btn w-100 mt-4" type="submit"> Acheter</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
@endsection
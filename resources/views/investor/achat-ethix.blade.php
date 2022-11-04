@extends('layouts.front')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif



@include('investor.header-investor')

    @if($user->status == 0 || $user->status == 1)
    
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
                        <h2 class="single-title"> Achat éthix -  <b>{{$property->designation}}  </b></h2>
                        <span class="badge bg-warning text-dark mt-1"> reste : {{$ethix_total}} éthix </span>
                         <form class="login-wrapper-contents-form custom-form" method="POST" action="{{url('app/store-ethix')}}">
                          @csrf
                            <div class="single-input mt-4">
                                <label class="label-title "> Votre Solde est de : <b style="color: #4DAA7F;"> 
                                    {{ $user->solde == NULL ? "0.00" : $user->solde }}   €</b> 
                                
                                </label>
                              
                            </div>
                            <div class="single-input mt-1">
                                <label class="label-title "> 
                                    Vous pouvez acheter jusqu'a <b style="color: #4DAA7F;">   {{ $max_ethix <= $ethix_total  ? $max_ethix : $ethix_total  }} </b> éthix
                                </label>
                            </div>
                            <div class="single-input mt-1">
                                <label class="label-title "> Mentionnez le nombre d'éthix :</label>
                                <input class="form--control " type="number" @if($message)style="border-color:red ;"@endif value="{{$max_ethix}}" name="nbr_ethix"  required>
                                @if($message)
                                    <span style="font-size: 14px; color:red">
                                        <span>{{ $message }}</span>
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
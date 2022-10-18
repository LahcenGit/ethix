@extends('layouts.front')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
         <!-- Breadcrumb area Starts -->
    <div class="breadcrumb-area breadcrumb-padding ">
            <div class="container d-flex justify-content-center " >
                <div class="col-1 text-center">
                    <a href="http://"> <i class="fa-solid fa-house-fire fa-2x" style="color:#4DAA7F; " > </i> <br> propriétés </a>
                </div>
                <div class="col-1 text-center">
                    <a href="{{url('app/investissements')}}"> <i class="fa-solid fa-money-bill-trend-up fa-2x" style="color:#4DAA7F; " > </i> <br> Investissements </a>
                </div>
                <div class="col-1 text-center">
                    <a href="{{url('app/profil')}}"> <i class="fa-solid fa-user fa-2x" style="color:#4DAA7F; " > </i> <br> Profil </a>
                </div>

                <div class="col-1 text-center">
                    <a href="{{route('logout')}}"> <i class="fa-solid fa-right-from-bracket fa-2x" style="color:#818181; " onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" > </i> <br> Déconnexion 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
                
                
            </div>
            @if($user->status == 0)
            <div class="container mt-4 ">
            <div class="alert alert-warning" role="alert">
             <span style="font-size: 17px;">@if($test_document == 0) Veuillez compléter les étapes restantes pour activer votre compte ,<a href="{{url('/add-file')}}" class="alert-link">Vas-y ! </a>
             @else
             La validation de votre compte est en cours de traitement...
             @endif
            </span>
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
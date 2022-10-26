@extends('layouts.front')
@section('content')
<div class="header-investor">
         <!-- Breadcrumb area Starts -->
         <div class="row d-flex justify-content-center " >
        <div class=" col-6  col-md-1 text-center mb-2 mt-2">
            <a href="{{url('app/')}}"> <i class="fa-solid fa-house-fire fa-2x" style="color:#4DAA7F; " > </i> <br> propriétés </a>
        </div>

        <div class=" col-6 col-md-1 text-center mb-2 mt-2">
            <a href="{{url('app/investissements')}}"> <i class="fa-solid fa-money-bill-trend-up fa-2x" style="color:#4DAA7F; " > </i> <br> Investissements </a>
        </div>
       
        <div class="col-6 col-md-1 text-center mb-2 mt-2">
            <a href="{{url('app/profil')}}"> <i class="fa-solid fa-user fa-2x" style="color:#4DAA7F; " > </i> <br> Profil </a>
        </div>

        <div class="col-6 col-md-1 text-center mb-2 mt-2">
            <a href="{{route('logout')}}"> <i class="fa-solid fa-right-from-bracket fa-2x" style="color:#818181; " onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" > </i> <br> Déconnexion 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
        </div>
    </div>
</div>
    <!-- Breadcrumb area end -->

    <div class="container d-flex justify-content-center mt-4 mb-4">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Complétez vos informations ! </h2>
                        <p class="sigle-para mt-2"> Veuillez renseigner toutes informations </p>
                        <form class="login-wrapper-form custom-form padding-top-20" method="POST" action="{{ url('app/add-info') }}">
                            @csrf
                            <label class="label-title mt-3 ">Genre* : </label>
                            <div class="form-check form-check-inline">
                             
                                <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="0">
                                <label class="form-check-label" for="inlineRadio1">Féminin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="1">
                                <label class="form-check-label" for="inlineRadio2">Masculin</label>
                            </div>
                            <div class="form-group col-md-6 mt-3">
                                <label>Pays de résidence* :</label>
                                <select  class="form-control mt-3" id="sel1"  class="selectpicker" data-live-search="true" name="country_of_residence" >
                                    @foreach($countries as $country)
                                    <option value="{{$country->langFR}}" @if($country->langFR == 'France') selected @endif>{{$country->langFR}}</option>
                                    @endforeach
                                </select>
                            </div>
                             
                            <div class="form-group col-md-6 mt-3">
                                <label>Pays de naissance* :</label>
                                <select  class="form-control mt-3" id="sel1"  class="selectpicker" data-live-search="true" name="birth" >
                                    @foreach($countries as $country)
                                    <option value="{{$country->langFR}}" @if($country->langFR == 'France') selected @endif>{{$country->langFR}}</option>
                                    @endforeach
                                </select>
                           </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Ville de naissance* :  </label>
                                <input class="form--control" type="text" name="cite_of_birth"  required>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Date de naissance* : </label>
                                <input class="form--control" type="date" name="date_of_birth"  required>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3">Adresse* : </label>
                                <input class="form--control" type="text"  name="address" required>
                                
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3">Numéro de département* : </label>
                                <input class="form--control" type="text"  name="num_department" required>
                                
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3">Code Postal* : </label>
                                <input class="form--control" type="text"  name="code_postal" required>
                                
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit"> Envoyer</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>



@endsection
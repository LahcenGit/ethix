@extends('layouts.front')
@section('content')
         <!-- Breadcrumb area Starts -->
         <div class="breadcrumb-area breadcrumb-padding ">
            <div class="container d-flex justify-content-center " >
                <div class="col-1 text-center">
                    <a href="http://"> <i class="fa-solid fa-house-fire fa-2x" style="color:#4DAA7F; " > </i> <br> propriétés </a>
                </div>
                <div class="col-1 text-center">
                    <a href="http://"> <i class="fa-solid fa-money-bill-trend-up fa-2x" style="color:#4DAA7F; " > </i> <br> Investissements </a>
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
    </div>
    <!-- Breadcrumb area end -->

    <div class="container d-flex justify-content-center mt-4 mb-4">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Finalisation d'un compte! ! </h2>
                        <p class="sigle-para mt-2"> Veuillez ajouter toutes les informations pour finaliser l'inscription</p>
                        <form class="login-wrapper-form custom-form padding-top-20" method="POST" action="{{ url('app/add-info') }}">
                            @csrf
                           
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Pays de résidence* : </label>
                                <input class="form--control" type="text" name="country_of_residence"  required>
                            </div>
                             
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Pays de naissance* :  </label>
                                <input class="form--control" type="text" name="country_of_birth"  required>
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
                            <div class="single-input mt-4">
                                <label class="label-title mb-3">Genre* : </label>
                                <input class="form--control" type="text"  name="genre" required>
                                
                            </div>
                            
                           
                            <button class="submit-btn w-100 mt-4" type="submit"> Envoyer</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>



@endsection
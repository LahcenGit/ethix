@extends('layouts.front')
@section('content')
@include('investor.header-investor')
    <!-- Breadcrumb area end -->

    <div class="container d-flex justify-content-center mt-4 mb-4">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">

                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Complétez vos informations ! </h2>
                        <p class="sigle-para mt-2"> Veuillez renseigner toutes informations </p>
                        <form class="login-wrapper-form custom-form padding-top-20" method="POST" action="{{ url('app/add-info') }}">
                            @csrf

                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="0">
                                <label class="form-check-label" for="inlineRadio1">Féminin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="1">
                                <label class="form-check-label" for="inlineRadio2">Masculin</label>
                            </div>


                            <div class="single-input mt-4">
                               <input class="form--control" type="text" name="country_of_residence" placeholder=" Pays de résidence"  required>
                            </div>

                           <div class="single-input mt-4">
                                <input class="form--control" type="text" name="country_of_birth" placeholder=" Pays de naissance"  required>
                            </div>
                            <div class="single-input mt-4">

                                <input class="form--control" type="text" name="cite_of_birth" placeholder="Ville de naissance"  required>
                            </div>
                            <div class="single-input mt-4">
                               <input type="text" class="form--control" name="date_of_birth" placeholder="Date de naissance" onfocus="(this.type='date')" required>
                            </div>
                            <div class="single-input mt-4">
                                <input class="form--control" type="text"  name="address" placeholder="Adresse" required>
                            </div>
                            <div class="single-input mt-4">
                                <input class="form--control" type="text"  name="num_department" placeholder="Numéro de département" required>
                            </div>
                            <div class="single-input mt-4">
                                <input class="form--control" type="text"  name="code_postal" placeholder="Code Postal" required>
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit"> Envoyer</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>



@endsection

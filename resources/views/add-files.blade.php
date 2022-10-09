@extends('layouts.front')
@section('content')
<section class="login-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img src="{{asset('Front/assets/img/single-page/login.jpg')}}" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Bienvenue! </h2>
                        <p class="sigle-para mt-2"> Ajouter les fichiers pour finaliser l'inscription</p>
                        <form action="{{url('app/add-file')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Document justificatif 1 :</label>
                                <input class="form--control" type="file"  name="file_one">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Document justificatif 2 : </label>
                                <input class="form--control" type="file"  name="file_two">
                                
                            </div>
                            
                            <button class="submit-btn w-100 mt-4" type="submit"> Ajouter</button>
                            
                        </form>
                        
                     </div>
                </div>
            </div>
        </div>
    </section>



@endsection
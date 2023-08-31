@extends('layouts.front')
@section('content')
         <!-- Breadcrumb area Starts -->
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

        <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">

                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Validation d'un compte! </h2>
                        <p class="sigle-para mt-2"> Veuillez ajouter les fichiers justicatifs pour finaliser l'inscription</p>

                        <p class="sigle-para mt-2">Piece d'identité (recto verso) ou passeport</p>
                        <form action="{{url('app/add-file')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Carte d'identité ou passeport (image/pdf):</label>
                                <input class="form--control @error('file_one') is-invalid @enderror" type="file"  name="file_one" value="{{old('file_one')}}" accept="image/*" required>
                                    @error('file_one')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                    @enderror
                            </div>
                           <button class="submit-btn w-100 mt-4" type="submit"> Envoyer</button>

                        </form>

                     </div>
                </div>
            </div>
        </div>




@endsection

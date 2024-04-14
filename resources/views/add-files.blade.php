@extends('layouts.front')
@section('content')
<!-- Breadcrumb area Starts -->
@include('investor.header-investor')
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

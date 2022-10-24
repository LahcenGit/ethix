@extends('layouts.front')
@section('content')

 <!-- login Area Starts -->


        <div class="container d-flex justify-content-center mt-4 mb-4">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Préinscription ! </h2>
                        <form class="login-wrapper-form custom-form padding-top-20" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-flex-item">
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Nom </label>
                                    <input class="form--control  @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{old('first_name')}}" placeholder="Nom" required>
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Prénom </label>
                                    <input class="form--control @error('last_name') is-invalid @enderror" type="text" name="last_name" placeholder="Prénom" value="{{old('last_name')}}" required>
                                       @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Username </label>
                                <input class="form--control @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" value="{{old('username')}}" required>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email  </label>
                                <input class="form--control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{old('email')}}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> N° de téléphone </label>
                                <input class="form--control @error('phone') is-invalid @enderror" type="text" id="phone" name="phone" placeholder="Téléphone" value="{{old('phone')}}" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="input-flex-item">
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Mot de passe </label>
                                    <input class="form--control @error('password') is-invalid @enderror" type="password" name="password" placeholder="******"required>
                                       
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                       @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Confirmer le mot de passe </label>
                                    <input class="form--control" type="password" name="password_confirmation" placeholder="******"required>
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkbox-inline mt-4">
                                <input class="check-input" type="checkbox" id="check15">
                                <label class="checkbox-label" for="check15"> Veuillez confirmer que vous acceptez notre
                                     <a class="color-one" href="{{url('politique-confidentialite')}}">  politique de confidentialité </a> </label>
                            </div>
                            <div class="alert alert-danger mt-3 alert-condition" role="alert" style="display: none;">
                                <span style="font-size: 15px;">Veuillez confirmer votre acceptation de notre politique de confidentialité </span>
                            </div>
                            <button class="submit-btn w-100 mt-4 btn-submit" > S'inscrir</button>
                            <span class="account color-light mt-3"> Vous avez déja un compte? <a class="color-one" href="{{asset('/login')}}"> Connecter </a> </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
 


@endsection
@push('check-condition')
<script>
$( ".btn-submit" ).click(function(e) {
    if(check15.checked) {
     $(this).parents("form:first").submit();
    }
    else{
        e.preventDefault();
        $(".alert-condition").css("display", "block");
    }
});
</script>
@endpush
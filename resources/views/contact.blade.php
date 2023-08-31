@extends('layouts.front')
@section('content')

<style>
    .text-blue {
    color: #024670 !important;
}
</style>
<!-- Question area starts -->
<section class="question-area pat-50 pab-50">
    <div class="container">
        <div class="section-title center-text">
            <h2 class="title"> Contactez-nous </h2>
            <div class="section-title-shapes"> </div>
            <h5>Nous nous ferons un plaisir de répondre à vos questions.</h5>
        </div>
        <div class="row g-4 mt-4 d-flex justify-content-center">

            <div class="col-md-8 ">
                <div class="faq-question faq-question-border radius-10">
                    <h3 class="faq-question-title"> Merci de remplir ce formulaire
                    </h3>
                    <div class="faq-question-form custom-form mat-20">
                        <form id="contact-form" action="{{asset('/contact')}}" method="POST">
                            @csrf
                            <div class="single-input">

                                <input type="text" class="form--control radius-10" placeholder="Nom" id="name" required>
                            </div>
                            <div class="single-input">

                                <input type="text" class="form--control radius-10" placeholder="Email" id="email" required>
                            </div>
                            <div class="single-input">

                                <textarea name="message" class="form--control form-message radius-10" placeholder="Message" id="message" required></textarea>
                            </div>
                            <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                                <div class="col-md-12  mt-3">
                                    <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                                    </div>
                                    <input id="captcha" type="text" class="form--control radius-10 mt-3" placeholder="Entrez le Captcha" id="captcha" required>
                                    @if ($errors->has('captcha'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('captcha') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div id="show_contact_msg" >

                            </div>
                            <button class="submit-btn w-100 radius-10" type="submit"> Envoyer </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Question area end -->
@endsection
@push('contact-scripts')
<script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $("#contact-form").on("submit", function (e)
    {
        $('#show_contact_msg').html('<div >En cours....</div>');
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var captcha = $('#captcha').val();
        var formURL = $(this).attr("action");
        var data = {
            name: name,
            email: email,
            message: message,
            captcha: captcha,
        };
        $.ajax(
                {
                    url: formURL,
                    type: "POST",
                    data: data,
                    success: function (response) {
                        if (response == true) {
                            $('#show_contact_msg').html('<div class="alert alert-success mt-2 flash-alert" id="form-success" role="alert">Votre messgae à été bien envoyer !</div>');
                            $(".flash-alert").slideDown(200).delay(3500).slideUp(200);
                        }
                        else{
                            $('#show_contact_msg').html('<div class="alert alert-danger mt-2 flash-alert" id="form-success" role="alert">Le code Captcha est invalide</div>');
                            $(".flash-alert").slideDown(200).delay(3500).slideUp(200);
                        }


                    }
                });
        e.preventDefault();
    });

</script>

<script type="text/javascript">


    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refresh_captcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });
</script>
@endpush

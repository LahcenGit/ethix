@extends('layouts.front')
@section('content')
<style>
    .text-blue {
    color: #024670 !important;
    font-size: 17px;
}
</style>
<!-- Banner area Starts -->

<div class="banner-area banner-area-one">
        <div class="container p-0">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6" style="padding-left:none!important;">
                    <div class="banner-single banner-single-one ">
                        <div class="banner-single-content p-4">
                            <h2 class="banner-single-content-title fw-700" style="color: #024670"> L'investissement Éthique. </h2>
                            <h2 class="banner-single-content-title fw-500 mt-2 " style="font-size:25px;"> L'immobilier sans crédit à partir de 100€ ! </h2>
                           {{--<p class="banner-single-content-para "> Achetez des parts de nos projets immobiliers
                                Et faites fructifier votre épargne !  </p>--}}
                                <div style="margin-top: 25px;">
                                <a  href="{{ route('register') }}" class="submit-btn w-30 radius-10 mt-2 " style="font-size:23px;"> Je veux investir ! </a>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 bg-image banner-right-bg radius-20" style="background-image: url(Front/assets/img/banner/banner.jpg);"></div>
            </div>
        </div>
    </div>
    <!-- Banner area end -->


    <!-- Booking area starts -->
    <section class="booking-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Pourquoi investir avec Ethix  ?  </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row gy-4 mt-5">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <i class="fa-solid fa-thumbs-up fa-3x" style="color:#4DAA7F;size:20px;"></i>
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)">  Investir sans crédit bancaire </a> </h4>
                            <p class="single-why-contents-para mt-3"> Grâce à l'investissement collectif nous pouvons nous passer du crédit bancaire et ainsi être en accord avec nos valeurs. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow zoomIn" data-wow-delay=".4s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <i class="fa-solid fa-money-bill-transfer fa-3x" style="color:#4DAA7F;size:20px;"></i>
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)">  Faire fructifier notre épargne  </a> </h4>
                            <p class="single-why-contents-para mt-3">  Plutôt que de laisser son épargne dormir sur un livret A. Nous investissons ensemble pour faire fructifier celle-ci de façon éthique  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <i class="fa-solid fa-house-crack fa-3x" style="color:#4DAA7F;size:20px;"></i>
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)">  Constituer une communauté  </a> </h4>
                            <p class="single-why-contents-para mt-3">  Notre souhait est de constituer une communauté d'investisseurs responsables et partageant les mêmes valeurs. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <i class="fa-solid fa-arrow-up-right-dots fa-3x" style="color:#4DAA7F;size:20px;"></i>
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)">  Développer des projets  </a> </h4>
                            <p class="single-why-contents-para mt-3">  Progresser ensemble afin de multiplier nos investissements et accéder à des projets plus grands et plus ambitieux. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking area ends -->
    <!-- Booking area starts -->
    <section class="booking-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title" > Notre vision </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row gy-4 mt-5">
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)" style="color: #4DAA7F"> Investir sans Riba </a> </h4>
                            <p class="single-why-contents-para mt-3"> Et si on vous disait que vous pouviez investir votre épargne librement tout en respectant votre éthique ?!
                                Notre souhait de faire fructifier notre épargne est souvent confronté au risque de pratiquer l’usure via les méthodes traditionnelles proposées.
                                C’est pourquoi la plateforme Ethix supprime complètement les barrières à l’investissement en proposant une offre conforme à l’éthique musulmane.
                                L’investissement participatif permet désormais le lancement de projets sans avoir recours au crédit bancaire et en restant en parfaite harmonie avec nos valeurs. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight radius-20" data-wow-delay=".2s" style="background-image: url(Front/assets/img/banner/vision1.jpg);">
                </div>
            </div>

            <div class="row gy-4 mt-5">
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight radius-20" data-wow-delay=".2s" style="background-image: url(Front/assets/img/banner/vision2.jpg);">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title" style="color: #4DAA7F"> <a href="javascript:void(0)">  L’immobilier comme valeur refuge </a> </h4>
                            <p class="single-why-contents-para mt-3">L’immobilier reste l’investissement le plus sécurisé c’est pourquoi nous avons sélectionné ce support permettant d’obtenir des rendements annuels pouvant aller jusqu’à  10%!  Nous attachons beaucoup d’importance au choix des projets dans lesquels nous investissons; Une étude minutieuse nous permet de réaliser des opérations à fort rendement habituellement inaccessibles sans faire appel au crédit bancaire.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Booking area ends -->


    <!-- shots area starts -->
    <section class="shots-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">
                    Rejoignez la communauté des investisseurs Ethix
                     </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="center-text mt-4">
                <p class="single-why-contents-para"> Démarrez dès maintenant votre projet de vie et rejoignez le groupe d'investisseurs
                </p>
                <button class="submit-btn w-30 radius-10 mt-2 " style="font-size:21px;"> <a href="{{asset('/register')}}">Inscription!</a>  </button>
            </div>

        </div>
    </section>
    <!-- shots area end -->
    <!-- Question area starts -->
    <section class="question-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Questions fréquentes </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="faq-wrapper">
                        <div class="faq-contents">
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    Qu'est-ce que Ethix ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para text-blue"> Ethix est la première startup dédiée à l'investissement sans la pratique de l'usure.


                                        Investir dès 100 euros dans des projets à forte valeur ajoutée dans le but de se constituer une épargne et des revenus réguliers devient désormais accessible à tous. </p>
                                </div>
                            </div>
                            <div class="faq-item active open wow fadeInLeft" data-wow-delay=".2s">
                                <h3 class="faq-title">
                                    Quelles sont les conditions pour investir sur Ethix ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para text-blue"> Être majeur tout simplement !
                                        Des justificatifs d'identité vous seront ensuite demandés pour valider votre compte et vous permettre d'investir sur notre plateforme. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".3s">
                                <h3 class="faq-title">
                                    En achetant des Ethix, est ce que je pratique de l'usure?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para text-blue"> Non, tous nos projets sont financés avec nos fonds propres UNIQUEMENT.
                                        Nous ne faisons donc jamais appel au crédit. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                            Puis-je investir avec une société ?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para text-blue"> Oui, vous pouvez investir avec votre société.

                                  Nous vous demanderons simplement quelques documents supplémentaires de votre entreprise. </p>
                            </div>
                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                            Comment sont séléctionnés les projets Ethix ?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para text-blue"> Nos projets sont minutieusement sélectionnés, chaque opportunité est étudiée dans son ensemble :</p>
                                    <ul>
                                       <li> Le marché immobilier local</li>
                                       <li>La structure du bien</li>
                                       <li>L’urbanisme </li>
                                       <li> Plusieurs estimations des travaux à effectuer pour apporter une valeur ajoutée au bien</li>
                                       <li>Le niveau de marge à sortir</li>
                                       <li>La fiscalité.</li>
                                    </ul>
                                       <p class="faq-para text-blue"> Nous passons beaucoup de temps avant de signer le compromis d'achat et nous engager dans un projet.</p>
                            </div>

                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                            Comment se rémunère Ethix ?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para text-blue"> Aucun frais d'entrée ni de sortie n'est pris sur votre investissement.
                                    Nous nous rémunérons en une fois sur les projets pour impacter le moins possible vos <b>plus-values locatives </b> :</p>
                                 <ul>
                                 <li>Lors de l'achat du bien, nous appliquons un pourcentage de 10% pour nous permettre d'engager les différents frais liés au suivi du projet et pour nous rémunérer.</li>

                                 </ul>
                            </div>

                        </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    Quelle rendement espérer ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para text-blue"> Chaque projet apporte un rendement différent, mais nous nous sommes fixés un objectif de plus-value entre 3 et 10% au minimum. Cette rentabilité n’est pas garantie, c’est une estimation.
                                    </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    Comment sont calculés mes dividendes ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para text-blue"> Chaque année vous recevez un dividende calculé sur la base de votre investissement initial et de la plus-value générée à la suite des projets engagés dans l'année en cours.

                                        Exemple :

                                        Nous démarrons un projet d'une valeur totale de 100000€ en mars.

                                        Celui-ci dure 9 mois entre achat, travaux et revente.

                                        A la revente nous enregistrons une plus-value nette de 15000€

                                        Celle-ci est divisée entre les investisseurs au prorata de leur investissement.

                                        Celui qui aura investi 5000€, reçoit donc un dividende de 750€ qu’il peut décider de réinvestir afin de profiter de l'effet cumulé</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="faq-question faq-question-border radius-10">
                        <h3 class="faq-question-title"> Encore des questions ?
                        </h3>
                        <div class="faq-question-form custom-form mat-20">
                            <form id="faq-mail-form" action="{{asset('/faq-mail')}}" method="POST">
                                @csrf
                                <div class="single-input">

                                    <input type="text" class="form--control radius-10" placeholder=" Nom" id="name" required>
                                </div>
                                <div class="single-input">

                                    <input type="text" class="form--control radius-10" placeholder="Email" id="email-faq" required>
                                </div>
                                <div class="single-input">

                                    <textarea name="message" class="form--control form-message radius-10" placeholder="Question" id="question" required></textarea>
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


    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <i class="fa-solid fa-check-to-slot mr-2" style="color: #4DAA7F"></i>
        <strong class="me-auto ml-2">Inscription réussite</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        Vous allez reçevoir toutes nos actualités
        </div>
    </div>
    </div>
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast2" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <i class="fas fa-exclamation-circle mr-2" style="color:#C41718" ></i>
        <strong class="me-auto ml-2">Echec Inscription</strong>
        <button type="button" class="btn-close close2" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        Ce email existe déja
        </div>
    </div>
    </div>

    <!-- Newsletter area starts -->
    <div class="newsletter-area pat-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrapper newsletter-bg radius-20 newsletter-wrapper-padding wow zoomIn" data-wow-delay=".3s">
                        <div class="newsletter-wrapper-shapes">
                            <img src="{{asset('Front/assets/img/single-page/newsletter-shape1.png')}}" alt="shapes">
                            <img src="{{asset('Front/assets/img/single-page/newsletter-shape2.png')}}" alt="shapes">
                        </div>

                        <div class="newsletter-contents center-text">
                            <h3 class="newsletter-contents-title"> Newsletter </h3>
                            <p class="newsletter-contents-para mt-3">
                                Inscrivez-vous à notre newsletter pour suivre nos actualités.
                                 </p>
                            <div class="newsletter-contents-form custom-form mt-4">
                                <div class="single-input">
                                    <input type="text" id="email" class="form--control" placeholder="Taper votre email" required>
                                    <button class="submit-btn btn-newsletter" id="toastr-info-top-right"> Envoyer </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter area end -->

@endsection
@push('add-newsletter')
<script>
$( ".btn-newsletter" ).click(function(e) {

    e.preventDefault();
    let email = $('#email').val();

    $.ajax({
          type:"Post",
          url: '/newsletter',
          data:{
            "_token": "{{ csrf_token() }}",
            email:email,
          },
          success:function(response){
            if(response == true){
            $("#liveToast").show();
            }
            else{
                $("#liveToast2").show();
            }
          },

          });
});
$( ".btn-close" ).click(function(e) {
    $("#liveToast").hide();

});
$( ".close2" ).click(function(e) {
    $("#liveToast2").hide();

});
</script>
@endpush
@push('faq-mail-scripts')
<script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $("#faq-mail-form").on("submit", function (e)
    {
        $('#show_contact_msg').html('<div >En cours....</div>');
        var name = $('#name').val();
        var email = $('#email-faq').val();
        var message = $('#question').val();
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

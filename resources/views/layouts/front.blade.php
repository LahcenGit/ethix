<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ethix invest – L'investissement immobilier Ethique</title>

    <!-- favicon -->
    <link rel=icon href="{{asset('Front/assets/img/logo-favicon.png')}}" sizes="16x16" type="icon/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/bootstrap.min.css')}}">
    <link href="{{asset('Dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/line-awesome.min.css')}}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/animate.css')}}">
    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/slick.css')}}">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/magnific-popup.css')}}">
    <!-- Flat Picker Css -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/flatpicker.css')}}">
    <!-- TellInput Css -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/intlTelInput.css')}}">
    <!-- Nice Select Css -->

     
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

     

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" referrerpolicy="no-referrer" />
</head>

<style>
    .header-investor{
        background-color: #E9F1F4;
        padding: 20px;

    }

    /* The actual timeline (the vertical ruler) */
.main-timeline-4 {
  position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline-4::after {
  content: "";
  position: absolute;
  width: 3px;
  background-color: #bbb;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.timeline-4 {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline-4::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -11px;
  background-color: #bbb;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left-4 {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right-4 {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left-4::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium solid rgba(37, 117, 252, 1);
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent rgba(37, 117, 252, 1);
}

/* Add arrows to the right container (pointing left) */
.right-4::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium solid rgba(245, 87, 108, 1);
  border-width: 10px 10px 10px 0;
  border-color: transparent rgba(245, 87, 108, 1) transparent transparent;
}

/* Fix the circle for containers on the right side */
.right-4::after {
  left: -14px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline-4::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline-4 {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline-4::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left-4::after,
  .right-4::after {
    left: 18px;
  }

  .left-4::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right-4 {
    left: 0%;
  }
}

.gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to right,
    rgb(17, 203, 101),
    rgb(21, 31, 56)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to right,
    rgb(77, 170, 127),
    rgb(0, 65, 108)
  );
}

.gradient-custom-4 {
  /* fallback for old browsers */
  background: #f093fb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to left,
    rgb(77, 170, 127),
    rgb(0, 65, 108)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to left,
    rgb(77, 170, 127),
    rgb(0, 65, 108)
  );
}



</style>
<style>
    .form-check-input:checked{
        background-color: #4DAA7F;
        border-color: #4DAA7F;
    }
   
</style>

<body>
    <header class="header-style-01">
        <!-- Menu area Starts -->
        <nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
            <div class="container custom-container-one nav-container">
                <div class="logo-wrapper">
                    <a href="{{asset('/')}}" class="logo">
                        <img src="{{asset('Front/assets/img/ethix-logo.png')}}" alt="">
                    </a>
                </div>
                <div class="responsive-mobile-menu d-lg-none">
                    <a href="#" class="click-nav-right-icon">
                        <i class="las la-ellipsis-v"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hotel_booking_menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="hotel_booking_menu">
                    <ul class="navbar-nav">
                        <li class=" current-menu-item">
                            <a href="{{asset('/')}}">Accueil</a>
                        </li>
                        <li><a href="{{asset('/ccm')}}"> Comment ça marche </a></li>
                        <li><a href="{{asset('/faq')}}"> FAQ </a></li>
                        <li><a href="#"> Contact </a></li>
                    </ul>
                </div>
                <div class="navbar-right-content show-nav-content">
                    <div class="single-right-content">

                        <div class="navbar-right-flex">
                            @auth
                            <div class="navbar-right-btn">
                                 <span style="color: #4DAA7F"> <i class="fa-solid fa-wallet"></i> {{Auth::user()->solde}}€  </span>
                            </div>
                            <div class="btn-wrapper">
                                @if (Auth::user()->type == 'admin')
                                <a href="{{asset('/dashboard-admin') }}"  class="cmn-btn btn-bg-1 radius-10">
                                    <span class="ml-2"> Dashboard <i class="fa-solid fa-caret-right"></i></span>
                                </a>
                                @else
                                <a href="{{asset('/app') }}"  class="cmn-btn btn-bg-1 radius-10">
                                    <span class="ml-2"> Dashboard <i class="fa-solid fa-caret-right"></i></span>
                                </a>
                                @endif
                            </div>
                            @else
                            <div class="navbar-right-btn">
                                <a href="{{ route('login') }}"> Connexion </a>
                                
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ route('register') }}" class="cmn-btn btn-bg-1 radius-10"> Pré-inscription </a>
                            </div>
                            @endauth
                        </div>
                  </div>
            </div>
        </nav>
        <!-- Menu area end -->
        
    </header>
    @yield('content')
    <!-- footer area start -->
    <footer class="footer-area footer-area-one footer-border-round footer-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-wrapper pat-100 pab-100">
                        <div class="footer-contents center-text">
                            <div class="footer-contents-logo">
                               {{--<a href="index.html" class="footer-contents-logo-img"> <img src="assets/img/logo-favicon.png" alt="logo"> </a>--}} 
                                <h3 class="footer-contents-logo-title text-white"> <a href="index.html"> Ethix-invest  </a> </h3>
                                <p class="footer-contents-logo-para mt-3"> L'investissement immobilier Ethique. </p>
                            </div>
                            <div class="footer-widget widget">
                                <div class="footer-widget-social mt-4">
                                    <ul class="footer-widget-social-list list-style-none justify-content-center">
                                        <li class="footer-widget-social-list-item">
                                            <a class="footer-widget-social-list-link" href="https://www.facebook.com/groups/247713964064377"> <i class="lab la-facebook-f"></i> </a>
                                        </li>
                                        <li class="footer-widget-social-list-item">
                                            <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-twitter"></i> </a>
                                        </li>
                                        <li class="footer-widget-social-list-item">
                                            <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-instagram"></i> </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area footer-padding copyright-bg-1">
            <div class="container">
                <div class="copyright-contents">
                    <div class="copyright-contents-flex">
                        <div class="copyright-contents-items">
                            <div class="copyright-contents-single">
                                <div class="copyright-contents-single-flex">
                                    <div class="copyright-contents-single-icon">
                                        <i class="las la-phone"></i>
                                    </div>
                                    <div class="copyright-contents-single-details">
                                        <span class="copyright-contents-single-details-title"> Télephone </span>
                                        <a href="tel:3104372766" class="copyright-contents-single-details-link"> 0626773538</a>
                                    </div>
                                </div>
                            </div>
                            <div class="copyright-contents-single">
                                <div class="copyright-contents-single-flex">
                                    <div class="copyright-contents-single-icon">
                                        <i class="las la-envelope"></i>
                                    </div>
                                    <div class="copyright-contents-single-details">
                                        <span class="copyright-contents-single-details-title"> Email</span>
                                        <a href="mailto:unreal@example.com" class="copyright-contents-single-details-link"> contact@ethix-invest.com </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="copyright-contents-main"> © 2022, All Rights Reserved by <a href="index.html"> InnoDev </a> </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"> <i class="las la-angle-up"></i> </span>
    </div>
    <!-- back to top area end -->

    <!-- Mouse Cursor start -->
    <div class="mouse-move mouse-outer"></div>
    <div class="mouse-move mouse-inner"></div>
    <!-- Mouse Cursor Ends -->

    <!-- jquery -->
    <script src="{{asset('Front/assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- jquery Migrate -->
    <script src="{{asset('Dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery-migrate.min.js')}}"></script>
     <!-- bootstrap -->
     <script src="{{asset('Front/assets/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('Front/assets/js/wow.js')}}"></script>
    <!-- Slick Js -->
    <script src="{{asset('Front/assets/js/slick.js')}}"></script>
    <!-- Isotope Js -->
    <script src="{{asset('Front/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{asset('Front/assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.nice-select.js')}}"></script>
    <!-- Flat Picker Js -->
    <script src="{{asset('Front/assets/js/flatpicker.js')}}"></script>
    <!-- Range Slider Js -->
    <script src="{{asset('Front/assets/js/nouislider-8.5.1.min.js')}}"></script>
    <!-- TellInput Js -->
    <script src="{{asset('Front/assets/js/intlTelInput.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('Front/assets/js/main.js')}}"></script>
   
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" referrerpolicy="no-referrer"></script>

    <script>
        $('.owl-carousel').owlCarousel({
    items:5,
    loop:true,
    margin:10,
    merge:true,
    responsive:{
        678:{
            mergeFit:true
        },
        1000:{
            mergeFit:false
        }
    }
});
    </script>
    
<script>
    $(document).ready(function(){
          $(".flash-alert").slideDown(200).delay(2500).slideUp(200);
    });

</script>
@stack('achat-ethix-scripts')
@stack('validate-scripts')
@stack('check-condition')
@stack('add-newsletter')
</body>

</html>
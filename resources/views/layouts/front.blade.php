<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ethix invest – L'investissement immobilier Ethique</title>

    <!-- favicon -->
    <link rel=icon href="favicon.png" sizes="16x16" type="icon/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/bootstrap.min.css')}}">
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
    <link rel="stylesheet" href="{{asset('Front/assets/css/nice-select.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" referrerpolicy="no-referrer" />

</head>

<body>

    <header class="header-style-01">
        <!-- Menu area Starts -->
        <nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
            <div class="container custom-container-one nav-container">
                <div class="logo-wrapper">
                    <a href="index.html" class="logo">
                        <img src="{{asset('Front/assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="responsive-mobile-menu d-lg-none">
                    <a href="javascript:void(0)" class="click-nav-right-icon">
                        <i class="las la-ellipsis-v"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hotel_booking_menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="hotel_booking_menu">
                    <ul class="navbar-nav">
                        <li class=" current-menu-item">
                            <a href="javascript:void(0)">Accueil</a>
                        </li>
                        <li><a href="about.html"> Comment ça marche </a></li>
                        <li><a href="checkout.html"> FAQ </a></li>
                        <li><a href="contact.html"> Contact </a></li>
                    </ul>
                </div>
                <div class="navbar-right-content show-nav-content">
                    <div class="single-right-content">
                        <div class="navbar-right-flex">
                            <div class="navbar-right-btn">
                                @if (Route::has('login'))
                                @auth
                                <div class="btn-wrapper">
                                <a href="{{route('logout')}}"  class="cmn-btn btn-bg-1 radius-10" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <span class="ml-2">Déconnecter </span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                            </form>
                                </a>
                                </div>
                                @else
                                <a href="{{ route('login') }}"> Connexion </a>
                                <div class="btn-wrapper">
                                <a href="{{ route('register') }}" class="cmn-btn btn-bg-1 radius-10"> Pré-inscription </a>
                                </div>
                                @endauth
                                @endif
                            </div>
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
                                            <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-facebook-f"></i> </a>
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
                                        <a href="tel:3104372766" class="copyright-contents-single-details-link"> 00-21-21-21 </a>
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
                                        <a href="mailto:unreal@example.com" class="copyright-contents-single-details-link"> contact@ethix.com </a>
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
    <!-- Nice Select Js -->
    <script src="{{asset('Front/assets/js/jquery.nice-select.js')}}"></script>
    <!-- Flat Picker Js -->
    <script src="{{asset('Front/assets/js/flatpicker.js')}}"></script>
    <!-- Range Slider Js -->
    <script src="{{asset('Front/assets/js/nouislider-8.5.1.min.js')}}"></script>
    <!-- TellInput Js -->
    <script src="{{asset('Front/assets/js/intlTelInput.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('Front/assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" referrerpolicy="no-referrer"></script>


</body>

</html>
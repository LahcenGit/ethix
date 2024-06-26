
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ethix- Admin dashboard</title>
    <!-- Favicon icon -->
    <link href="{{asset('Dashboard/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link rel=icon href="{{asset('Front/assets/img/logo-favicon.png')}}" sizes="16x16" type="icon/png">
    <link href="{{asset('Dashboard/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('Dashboard/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('Dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('Dashboard/css/style.css')}}" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Dashboard/uploader/pe-icon-7-stroke.css')}}">
	<link rel="stylesheet" href="{{asset('Dashboard/uploader/drop_uploader.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" referrerpolicy="no-referrer" />
    <link href="{{asset('Dashboard/vendor/summernote/summernote.css')}}" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.min.css " rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/toastr/css/toastr.min.css')}}">
</head>

<style>
    .swal-button--confirm {
     background-color: #4DAA7F !important;
     border-color: #4DAA7F !important;
}
</style>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{url('dashboard-admin')}}" class="brand-logo">
                 {{--<img class="logo-abbr" src="{{asset('Dashboard/images/logo-white.png')}}" alt="">
                <img class="logo-compact" src="{{asset('Dashboard/images/logo-text-white.png')}}" alt="">
                <img class="brand-title" src="{{asset('Dashboard/images/logo-text-white.png')}}" alt="">--}}

				<img class="brand-title" src="{{asset('Dashboard/images/logo-text-white.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>

                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                            <button type="button"  class="btn btn-primary update-ethix-value" >Valeur ethix</button>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="#">
                                    <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path></svg>
                                </a>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{asset('Dashboard/images/profile/pic1.jpg')}}" width="20" alt=""/>
									<div class="header-info">
										<span>Bonjour, <strong>{{Auth::user()->first_name}}</strong></span>
										<small>Administrateur</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
									<a href="{{route('logout')}}" class="dropdown-item ai-icon" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Déconnexion </span>
										 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                    </a>
                                </div>
                            </li>
							<li class="nav-item right-sidebar">
                                <a class="nav-link bell ai-icon" href="#">
                                    <svg id="icon-menu" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                </a>
							</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
				<li class="nav-label first">Main Menu</li>
						<li><a href="{{url('/dashboard-admin')}}" class="ai-icon" aria-expanded="false">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" opacity="0.3" x="17" y="4" width="3" height="13" rx="1.5"/>
                                    <rect fill="#000000" opacity="0.3" x="12" y="9" width="3" height="8" rx="1.5"/>
                                    <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="11" width="3" height="6" rx="1.5"/>
                                </g>
                            </svg>
							<span class="nav-text">Dashboard</span>
						</a></li>
                   <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920211 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/></g></svg>
							<span class="nav-text">Propriétés</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('dashboard-admin/properties/create')}}">Ajouter</a></li>
                            <li><a href="{{url('dashboard-admin/properties')}}">Toutes</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg>
							<span class="nav-text">Investisseurs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('dashboard-admin/users')}}">Tous</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
                                <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
                            </g>
                        </svg>
							<span class="nav-text">Versements</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('dashboard-admin/versments')}}">Tous</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M3,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L3,14 C2.44771525,14 2,13.5522847 2,13 L2,11 C2,10.4477153 2.44771525,10 3,10 Z M3,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,17 C2,16.4477153 2.44771525,16 3,16 Z" fill="#000000"/><rect fill="#000000" opacity="0.3" x="16" y="10" width="5" height="10" rx="1"/></g></svg>
							<span class="nav-text">Investissements</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('dashboard-admin/investissements')}}">Tous</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M10.8226874,8.36941377 L12.7324324,9.82298668 C13.4112512,8.93113547 14.4592942,8.4 15.6,8.4 C17.5882251,8.4 19.2,10.0117749 19.2,12 C19.2,13.9882251 17.5882251,15.6 15.6,15.6 C14.5814697,15.6 13.6363389,15.1780547 12.9574041,14.4447676 L11.1963369,16.075302 C12.2923051,17.2590082 13.8596186,18 15.6,18 C18.9137085,18 21.6,15.3137085 21.6,12 C21.6,8.6862915 18.9137085,6 15.6,6 C13.6507856,6 11.9186648,6.9294879 10.8226874,8.36941377 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M8.4,18 C5.0862915,18 2.4,15.3137085 2.4,12 C2.4,8.6862915 5.0862915,6 8.4,6 C11.7137085,6 14.4,8.6862915 14.4,12 C14.4,15.3137085 11.7137085,18 8.4,18 Z" fill="#000000"/>
                            </g>
                        </svg>
							<span class="nav-text">Engagements</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('dashboard-admin/engagements')}}">Tous</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
                                <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
                            </g>
                        </svg>
							<span class="nav-text">Virements</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('dashboard-admin/virments')}}">Tous</a></li>

                        </ul>
                    </li>

                </ul>
            </div>


        </div>
        <div id="modal-update-ethix"></div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        @yield('content')

         <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">InnoDev</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('Dashboard/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('Dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('Dashboard/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('Dashboard/js/custom.min.js')}}"></script>
	<!-- Apex Chart -->
	<script src="{{asset('Dashboard/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Vectormap -->
	<!-- Chart piety plugin files -->
    <script src="{{asset('Dashboard/vendor/peity/jquery.peity.min.js')}}"></script>

    <!-- Chartist -->
    <script src="{{asset('Dashboard/vendor/chartist/js/chartist.min.js')}}"></script>
	<!-- Datatable -->
	<script src="{{asset('Dashboard/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('Dashboard/js/plugins-init/datatables.init.js')}}"></script>
	<!-- Dashboard 1 -->
	<script src="{{asset('Dashboard/js/dashboard/dashboard-1.js')}}"></script>
	<!-- Svganimation scripts -->
	<script src="{{asset('Dashboard/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('Dashboard/vendor/svganimation/svg.animation.js')}}"></script>
    <script src="{{asset('Dashboard/uploader/drop_uploader.js')}}"></script>
    <script src="{{asset('Dashboard/vendor/summernote/js/summernote.min.js')}}"></script>
    <!-- Summernote init -->
    <script src="{{asset('Dashboard/js/plugins-init/summernote-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" referrerpolicy="no-referrer"></script>
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.all.min.js "></script>
    <script src="{{asset('dashboard/vendor/toastr/js/toastr.min.js')}}"></script>

    <script src="{{asset('/Dashboard/print/printThis.js')}}"></script>

	<script>
	(function($) {
		"use strict"

		var direction =  getUrlParams('dir');
		if(direction != 'rtl')
		{direction = 'ltr'; }

		new dezSettings({
			typography: "roboto",
			version: "light",
			layout: "vertical",
			headerBg: "color_1",
			navheaderBg: "color_3",
			sidebarBg: "color_1",
			sidebarStyle: "full",
			sidebarPosition: "fixed",
			headerPosition: "fixed",
			containerLayout: "wide",
			direction: direction
		});

	})(jQuery);
	</script>
    <script>

    $(document).ready(function(){
    $('input[type=file]').drop_uploader({
        uploader_text: 'Drop files to upload, or',
        browse_text: 'Browse',
        only_one_error_text: 'Only one file allowed',
        not_allowed_error_text: 'File type is not allowed',
        big_file_before_error_text: 'Files, bigger than',
        big_file_after_error_text: 'is not allowed',
        allowed_before_error_text: 'Only',
        allowed_after_error_text: 'files allowed',
        browse_css_class: 'button button-primary',
        browse_css_selector: 'file_browse',
        uploader_icon: '',
        file_icon: '',
        progress_color: '#4a90e2',
        time_show_errors: 5,
        layout: 'thumbnails',
        method: 'normal',
        chunk_size: 1000000,
        concurrent_uploads: 5,
        show_percentage: true,
        existing_files: false,
        existing_files_removable: true,
        send_existing_files: false,
        url: 'ajax_upload.php',
        delete_url: 'ajax_delete.php',
    });
});

    </script>
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(".update-ethix-value").on('click',function() {

 $.ajax({
    url: '/modal-update-ethix',
    type: "GET",
    success: function (res) {
      $('#modal-update-ethix').html(res);
      $("#ethixModal").modal('show');
    }
  });

});
</script>

<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });

  $("#modal-update-ethix").on('click','#update-value',function(e){
     e.preventDefault();
        let value = $('#value').val();
        $.ajax({
          type:"Post",
          url: '/update-ethix',
          data:{
            "_token": "{{ csrf_token() }}",
            value:value,

          },
          success:function(response){

            $('#modal-update-ethix').find('#successMsg').show();
            $('#ethixModal').modal('hide');
            console.log(response);
            location.reload();
          },

          });

   });
</script>

<script>
    $('.printMe').click(function(){
        $('#printable').printThis();
    });
</script>

@stack('mail-script')
@stack('modal-edit-investor-scripts')
@stack('form-update-scripts')
@stack('modal-show-file-scripts')
@stack('modal-add-versment-scripts')
@stack('form-store-versment-scripts')
@stack('modal-edit-compte-scripts')
@stack('obj-financement-script')
@stack('modal-edit-status-engagement-scripts')
</body>
</html>

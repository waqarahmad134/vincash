<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>VinCash - Admin </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Sell us your new or used car with a hassle free process giving you a quick 60 second offer. No more selling to the public or dealer trade. Get paid for selling your vehicle with no pressure.">
    <meta name="author" content="vincash, www.vincash.co">

    <link rel="icon" href="{{asset('public/images/favicon.png')}}" type="image/x-icon">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    
    <!-- Font-awesome -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    
    <!-- Summernotes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    
    <!-- Progress Bar -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    
    <!--UBUNTU GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&family=Montserrat&family=Ubuntu+Mono&family=Ubuntu:wght@400&display=swap" rel="stylesheet">
    
    <!-- Toaster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    <!-- Dropify Images -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/dropify/css/dropify.min.css')}}">
    
    <!--DataTable-->
    
    <link rel="stylesheet" href="{{asset('public/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/color_skins.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/preloader.css')}}">
    
    </head>
    
    <style>
    .loading-window {
        background: #00a2ec;
    }
    </style>
    
    <body class="antialiased" style="font-family: 'Ubuntu', sans-serif;">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <div class="loading-window">
                        <div class="car">
                            <div class="strike"></div>
                            <div class="strike strike2"></div>
                            <div class="strike strike3"></div>
                            <div class="strike strike4"></div>
                            <div class="strike strike5"></div>
                            <div class="car-detail spoiler"></div>
                            <div class="car-detail back"></div>
                            <div class="car-detail center"></div>
                            <div class="car-detail center1"></div>
                            <div class="car-detail front"></div>
                            <div class="car-detail wheel"></div>
                            <div class="car-detail wheel wheel2"></div>
                        </div>
                    
                        <!--<div class="text">-->
                        <!--    <span>Loading</span><span class = "dots">...</span>-->
                        <!--</div>-->
                    </div>
                    <!--<img src="{{asset('assets/images/logo/vincash-logo.png')}}" alt="Vincash Preloader">-->
                </div>
                <!--<p>Please wait...</p>        -->
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="{{route('home')}}">
                            <img src="{{asset('public/assets/images/logo/VinCash_original.png')}}" alt="Vincash Logo" class="img-fluid logo">
                        </a>
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars" style="color:#00a2ec;"></i></button>
                    </div>
                    <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                   
                </div>
                
                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('settings')}}" class="right_toggle icon-menu" title="Right Menu"><i class="icon-settings"></i></a></li>
                            <li><a href="{{route('logout')}}" class="icon-menu"><i class="icon-power"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand bg-light p-3">
            <a href="{{route('home')}}">
                <img class="img-fluid" src="{{asset('public/assets/images/logo/VinCash_original.png')}}" alt="VinCash Logo" >
            </a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll mt-5">
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="@if(\Request::route()->getName() == 'home') active  @endif"><a href="{{route('home')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    @if(Auth::user()->user_type == 'dealer')
                        <li><a href="{{route('dealer_vehicles')}}"><i class="icon-envelope"></i><span>Vehicles</span></a></li>
                        <li><a href="{{route('dealer_buy_vehicles')}}"><i class="icon-envelope"></i><span>Buy Vehicles</span></a></li>
                    @endif
                    @if(Auth::user()->user_type == 'admin')
                    <li class="@if(\Request::route()->getName() == 'buy_veh') active  @endif"><a href="{{route('buy_veh')}}"><i class="fa fa-phone-square" aria-hidden="true"></i><span>Sold Vehicle's</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'all_vehicles') active  @endif"><a href="{{route('all_vehicles')}}"><i class="fa fa-car" aria-hidden="true"></i><span>Vehicle Leads</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'memo') active  @endif"><a href="{{route('memo')}}"><i class="fa fa-car" aria-hidden="true"></i><span>Memo</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'messages') active  @endif"><a href="{{route('messages')}}"><i class="fa fa-envelope" aria-hidden="true"></i><span>Messages</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'dealers') active  @endif"><a href="{{route('dealers')}}"><i class="fa fa-users" aria-hidden="true"></i><span>Dealers</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'add_dealers') active  @endif"><a href="{{route('add_dealers')}}"><i class="fa fa-user-plus" aria-hidden="true"></i><span>Add Dealers</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'settings') active  @endif"><a href="{{route('settings')}}"><i class="fa fa-cogs" aria-hidden="true"></i><span>Settings</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'admin.all_faqs') active  @endif"><a href="{{route('admin.all_faqs')}}"><i class="fa fa-question-circle" aria-hidden="true"></i><span>FAQ's</span></a></li>
                    <li class="@if(\Request::route()->getName() == 'admin_email') active  @endif"><a href="{{route('admin_email')}}"><i class="fa fa-question-circle" aria-hidden="true"></i><span>Admin Email</span></a></li>
         
                    <!--<li class="@if(\Request::route()->getName() == 'front-end-settings') active  @endif"><a href="{{route('front-end-settings')}}"><i class="fa fa-wrench" aria-hidden="true"></i><span>Front End Setting</span></a></li>-->
                    <!--<li class="@if(\Request::route()->getName() == 'phone') active  @endif"><a href="{{route('phone')}}"><i class="fa fa-phone-square" aria-hidden="true"></i><span>Phone Number Setting</span></a></li>-->
                    <!--<li class="@if(\Request::route()->getName() == 'social-links') active  @endif"><a href="{{route('social-links')}}"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Social Links</span></a></li>-->
                    
                    @endif
                </ul>
            </nav>     
        </div>
    </div>

    @yield('content')

    <footer></footer>

    </div>

    <!-- Javascript -->
    <script src="{{asset('public/assets/bundles/libscripts.bundle.js')}}"></script>    
    <script src="{{asset('public/assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/js/index.js')}}"></script>
    
    <!--Datatable -->
    <script src="{{asset('public/assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{asset('public/assets/bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
    
    <!--Dropify-->
    <script src="{{asset('public/assets/vendor/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('public/assets/js/pages/forms/dropify.js')}}"></script>
    
    <!--Summer Notes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    
<script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
    
    <!-- FCM Notification -->
    <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
    <script>
        
        var firebaseConfig = {
          apiKey: "AIzaSyAJvMNOln3Vhionx4D8kx_bmw2QXbdUPyo",
          authDomain: "vincash.firebaseapp.com",
          projectId: "vincash",
          storageBucket: "vincash.appspot.com",
          messagingSenderId: "33143937336",
          appId: "1:33143937336:web:f87d54dd138149e5d849cd",
          measurementId: "G-QF4RK6V23T"
        };
        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();
        
        $(document).ready(function() {
         // executes when HTML-Document is loaded and DOM is ready
         initFirebaseMessagingRegistration();
        });
        
        function initFirebaseMessagingRegistration() {
                messaging.requestPermission().then(function () {
                    return messaging.getToken()
                }).then(
                    function(token) {
                        console.log(token);
                        // document.getElementById('device_token').value = token;
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: '{{ route("save-token") }}',
                            type: 'POST',
                            data: {
                                token: token
                            },
                            dataType: 'JSON',
                            success: function (response) {console.log('token saved successfully.');},
                            error: function (err) {console.log('User Chat Token Error'+ JSON.stringify(err));},
                        });
                        
                    })
                    .catch(function (err) {
                    console.log('User Chat Token Error'+ err);
                });
         }  
        messaging.onMessage(function(payload) {
            const noteTitle = payload.notification.title;
            const noteOptions = {
                body: payload.notification.body,
                icon: payload.notification.icon,
            };
            new Notification(noteTitle, noteOptions);
        });
    </script>
    
    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.message("{{ session('message') }}");
        @endif
      
        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{!! session('error') !!}");
        @endif
      
        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif
      
        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right"
        }
                toastr.warning("{{ session('warning') }}");
        @endif
        
    </script>    

</body>
</html>

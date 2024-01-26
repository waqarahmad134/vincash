<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vin Cash</title>
    
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('public/images/favicon.png')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!--UBUNTU GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&family=Montserrat&family=Ubuntu+Mono&family=Ubuntu:wght@400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome  --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="{{asset('public/css/vincash.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->
    
    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     
    <!-- Toaster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{asset('public/assets/css/preloader1.css')}}">
</head>


<body style="font-family: 'Ubuntu', sans-serif;">
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
            </div>
        </div>
    </div>
</div> 
    <nav class="navbar navbar-dark navbar-expand-sm bg-light fixed-top">
        <div class="container">
            <a href="{{route('homes')}}" class="navbar-brand">
                <img class="img-fluid" src="{{asset('public/images/')}}/{{App\Models\Setting::where('title','logo')->first()->description}}" width="100">
            </a>
            <button class="navbar-toggler bg-blue" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{route('homes')}}" class="nav-link active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('about')}}" class="nav-link ">
                        About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact')}}" class="nav-link ">
                        Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('faq')}}" class="nav-link ">
                        FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dealer_login')}}" class="nav-link ">
                        Dealer
                        </a>
                    </li>
                    <li class="nav-item mob-vanish  d-flex align-items-center" style="border-left:2px solid #00000057;">
                        <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;  <a class="d-flex" href="tel:{{App\Models\Setting::where('title','phone')->first()->description}}" >{!! App\Models\Setting::where('title','phone')->first()->description !!}</a> 
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    
        @yield('content')

<footer class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="single-footer-widget">
                    <div class="footer-logo mb-5">
                        <img class="img-fluid" src="{{asset('public/images/')}}/{{App\Models\Setting::where('title','footer_logo')->first()->description}}" alt="vincash" width="150">
                    </div>
                    <p class="mb-5 font-24">{!! App\Models\Setting::where('title','about_us_footer')->first()->description !!}</p>
                </div>
            </div>
       
            <div class="col-lg-5 col-md-5 col-12">
                <div class="single-footer-widget d-flex justify-content-center">
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{route('homes')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('faq')}}">FAQ’s</a></li>
                            <li><a href="{{route('dealer_login')}}">Dealer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-3 mb-5">
            <div class="col-md-7 col-lg-7 col-12">
                <div class="d-flex justify-content-center justify-content-sm-start">
                    <a href="https://www.facebook.com/">
                        <img class="img-fluid" src="{{asset('public/images/fb.png')}}" width="25"> &nbsp;&nbsp;
                    </a>
                    <a href="https://www.twitter.com/">
                        <img class="img-fluid" src="{{asset('public/images/twitter.png')}}" width="45"> &nbsp;&nbsp;
                    </a>
                    <a href="https://www.instagram.com/accounts/login/?next=/_vincash_/">
                        <img class="img-fluid" src="{{asset('public/images/insta.png')}}" width="40"> &nbsp;&nbsp;
                    </a>
                </div>
            </div>
            <!--<div class="col-md-5 col-lg-5 col-12">-->
            <!--    <div class="d-flex justify-content-around">-->
            <!--        <a href="" >Help & Support</a>-->
            <!--        <a href="{{route('terms')}}">Terms & Conditions</a>-->
            <!--        <a href="{{route('privacy')}}" >Privacy Policy</a>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
    <div class="mini-footer text-center text-white">
       {!! App\Models\Setting::where('title','footer')->first()->description !!}
    </div>
</footer>

 <!-- Javascript -->
    <script src="{{asset('public/assets/bundles/libscripts.bundle.js')}}"></script>    
    <script src="{{asset('public/assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/js/index.js')}}"></script>
    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Scroll js  -->
<script>
    var btn = $('#button');
    var offer_btn = $('#get-offer-btn');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    $(window).scroll(function() {
    if ($(window).scrollTop() > 2200) {
        offer_btn.removeClass('show');
    } 
    else if ($(window).scrollTop() > 300) {
        offer_btn.addClass('show');
    } 
    else {
        offer_btn.removeClass('show');
    }
    });
   
    offer_btn.on('click', function(e) {
        e.preventDefault();
        window.scroll({
          top: 0, 
          left: 0, 
          behavior: 'smooth'
        });
    });


    
        $("#chklease").click(function () {
            if ($(this).is(":checked")) {
                $("#lease").show();
            } else {
                $("#lease").hide();
            }
        });
        $("#chkpayoff").click(function () {
            if ($(this).is(":checked")) {
                $("#payoff").show();
            } else {
                $("#payoff").hide();
            }
        });
        $("#chkrepiar").click(function () {
            if ($(this).is(":checked")) {
                $("#repair").show();
            } else {
                $("#repair").hide();
            }
        });
</script>

<script>
// select all accordion items
const accItems = document.querySelectorAll(".accordion__item");

// add a click event for all items
accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

function toggleAcc() {
  // remove active class from all items exept current item
  accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
  );

  // toggle active class on current item
  if (this.classList != "accordion__item--active") {
    this.classList.toggle("accordion__item--active");
  }
}
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

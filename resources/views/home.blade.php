@extends('welcome')
@section('content')

<div id="get-offer-btn" class="text-center" >Get Offer Here</div>

<div class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-12 order-sm-1 order-2 banner-text">
                {!! App\Models\Setting::where('title','title')->first()->description !!}
                <img class="img-fluid banner-pic" src="{{asset('public/images/1_HeaderIcons.png')}}" width="500">
            </div>
            <div class="col-md-5 col-lg-5 col-12 order-sm-2 order-1"  data-aos="fade-up">
                <div class="card" style="margin-top:-2rem;">
                    <form method="POST">
                        @csrf
                    <div class="card-body">
                        <h2 class="text-center color-blue mb-4 mt-4">Get Offer Now</h2>
                        <div class="form-group">
                            <div class="tooltip_custom">
                                <label>Enter VIN 
                                <img src="{{asset('public/images/bx_error.png')}}" alt="">
                                <span class="tooltiptext">
                                    <div class="card">
                                        <div class="card-header">
                                            Where is my VIN ?
                                        </div>
                                        <div class="">
                                            <img class="" src="{{asset('public/images/Header_FormGraphic_White-01.png')}}" alt="check-vin-here" width="400">
                                        </div>
                                    </div>
                                </span>
                                </label>
                            </div>
                            <input type="text" class="form-control" name="vin_num" value="" placeholder="17 Digits VIN" required>
                        </div>
                        
                            <div class="form-group">
                                <label>Mileage</label>
                                <input type="text" class="form-control" name="km" value="" placeholder="KMs" required>
                            </div>
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" name="postal_code" value="" placeholder="Enter Postal Code" required>
                            </div>
                        <div class="mt-3">
                            <div class="col-lg-12 col-md-12 col-12">
                                <button class="btn btn-primary btn-lg btn-block mt-5 mb-3" type="submit">Get offer</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-5">
    <h2 class="title mb-2 mt-5" data-aos="zoom-in">Sell your car in 3 easy steps</h2>
    <p class="sub-text mb-5" data-aos="zoom-in">We make it faster and easier to sell your car. All you need to do is follow three simple steps.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="3000">
                <div class="pad">
                    <img class="img-fluid" style="border-radius:15px;" src="{{asset('public/images/Step-new-1.jpg')}}" alt="deal" width="250">
                </div>
                <div class="mt-5" style="width:260px;margin:auto;">
                    <span class="font-24 color-blue font-600">Tell Us About Your Car</span>
                    <p class="mt-2 mb-5 font-600">Share the details about your car and we'll offer  you a fair price.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="3000">
                <div class="pad">
                    <img class="img-fluid" style="border-radius:15px;" src="{{asset('public/images/Step-new-2.jpg')}}" alt="pickup" width="250">
                </div>
                <div class="" style="width:270px;margin:auto;margin-top: 38px;">
                    <span class="font-24 color-blue font-600" style="line-height:0;">Set up a pickup time that works for you</span>
                    <p class="mt-2 mb-5 font-600">We'll pick up your car at a date and time that's convenient for you.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="3000">
                <div class="pad">
                    <img class="img-fluid" style="border-radius:15px;" src="{{asset('public/images/Step-new-3.jpg')}}" alt="getpaid" width="250">
                </div>
                <div class="mt-5" style="width:270px;margin:auto;">
                    <span class="font-24 color-blue font-600">Get paid in minutes</span>
                    <p class="mt-2 mb-5 font-600">Choose how you want to get paid and relax while we do the rest!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pb-5 yes-section">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h1 class="text-white mt-5 title" data-aos="zoom-in-right" data-aos-duration="3000">Get $100 if we can’t beat others</h1>
                <p class="text-white mt-5 sub-text" data-aos="zoom-in-right">
                    “With our Last Look Policy, we will beat the exact price quote you have on your vehicle if you allow us to take the last look at your vehicle before you decide to sell it elsewhere. If we can’t beat the price you've been offered, we’re ready to mail you a $100 cheque!  At VINCash, we want to be the ones to give you the absolute best offer.” 
                </p>
                <p class="float-right color-blue font-24">Billy Jay</p>
            </div>
            <div class="col-md-6 col-lg-6 d-flex align-items-center" data-aos="fade-down-right" data-aos-duration="3000">
                <!--<img class="yes-it img-fluid" src="images/Part2_WithoutText.png" >-->
            </div>
        </div>
    </div>
</div>

<!-- features section ends
================================================== -->
<section  style="background-color: #F4F5FA;">
        <div class="container-fluid pb-5" style="padding: 0 8%;">
            <div class="row pt-5 pb-5">
                <div class="col-lg-12 col-md-12 col-12">
                    <h1 class="text-center">Happy Customers</h1>
                    <h5 class="text-center">Our customers love us so much, it's hard not to brag about them!</h5>
                </div>
            </div>
            
            <div class="row" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="col-md-4 col-lg-4">
                    <div class="card" style="border-color: 0.5px solid rgba(0, 0, 0, 0.38);">
                        <div class="card-body">
                            <div class="row">
                                <!--<div class="col-md-3 col-lg-3 center">-->
                                <!--    <img class="rounded-circle" src="images/users.png">-->
                                <!--</div>-->
                                <div class="col-md-9 col-lg-9 ">
                                    <h6>Terry Christensen</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h6>Saskatoon, Saskatchewan</h6>
                                </div>
                                <div class="container"><hr>
                                <p>
                                This is so much more logical than trading your car in.  Car dealers make trading or selling them a car a complicated process of negotiation.  Once I spoke to VINCash, I literally stopped thinking about it .  They found me a buyer for my Porsche 911 Turbo in the USA within hours.  I got more than any of the 6 dealers offered me on trade or to outright buy.  No brainer.  
                                </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-4 pad">
                <div class="card" style="border-color: 0.5px solid rgba(0, 0, 0, 0.38);">
                        <div class="card-body">
                            <div class="row">
                                <!--<div class="col-md-3 col-lg-3 center">-->
                                <!--    <img class="rounded-circle" src="https://specials-images.forbesimg.com/imageserve/60aed8457da7cba25bf94d8e/416x416.jpg?background=000000&cropX1=0&cropX2=1080&cropY1=0&cropY2=1080" width="80">-->
                                <!--</div>-->
                                <div class="col-md-9 col-lg-9">
                                    <h6>Arthur Charlie</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h6>Inuvik, NWT</h6>
                                </div>
                                <div class="container"><hr>
                                <p>
                                I was in urgent need of funds and required someone to take care of all the procedures including pickup of my 2013 Chevy Silverado in NWT.   My truck was broken down in the Inuvik and I needed to get back to work in Whitehorse.  VINCash representatives were very understanding and keen to help. I had no issue and wasted no time dealing with them.  
                                </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 pad">
                <div class="card" style="border-color: 0.5px solid rgba(0, 0, 0, 0.38);">
                        <div class="card-body">
                            <div class="row">
                                <!--<div class="col-md-3 col-lg-3 center">-->
                                <!--    <img class="rounded-circle" src="https://lh3.googleusercontent.com/a-/AOh14GhM6PZ2gwrDhZI_KJp0R6qMxWARcNtJxppER-FS=s500" width="80">-->
                                <!--</div>-->
                                <div class="col-md-9 col-lg-9">
                                    <h6>Shayla Jensen</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h6>Lamont, Alberta</h6>
                                </div>
                                <div class="container"><hr>
                                <p>
                                  VINCash has made car selling a lot easier. After weeks of pointless back and forth with private sale tire-kickers and scammers I finally came across VINCash. After submitting the details for my X6 I got an offer back instantly and the car was picked up from my driveway the next day.  My brother is using them to sell his Corvette right now!  
                              
                                </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4" data-aos="fade-down"  data-aos-easing="linear" data-aos-duration="1500">
            <div class="col-md-4 col-lg-4 pad">
                    <div class="card" style="border-color: 0.5px solid rgba(0, 0, 0, 0.38);">
                        <div class="card-body">
                            <div class="row">
                                <!--<div class="col-md-3 col-lg-3 center">-->
                                <!--    <img class="rounded-circle" src="https://d19cgyi5s8w5eh.cloudfront.net/img/914e7e5bea755c362ff192b4d1a1e2da6bd6fbe6" width="80">-->
                                <!--</div>-->
                                <div class="col-md-12 col-lg-12 d-flex justify-content-between">
                                    <h6>Kevon Gonku</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <!--<h6>Brandon, Manitoba</h6>-->
                                </div>
                                <div class="container"><hr>
                                <p>
                                VINCash representatives were polite and helped me through the entire process patiently. Unlike a car dealership, these guys don’t make you feel like you have to fight to get the best offer on your used car.  I’ve spoken to one of the owners and they actually bid your car out across the continent.  We have 9 cars on our farm and I think we will sell each and everyone through this platform.  Kudos VINCash.  
                                
                                </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-4 pad">
                    <div class="card" style="border-color: 0.5px solid rgba(0, 0, 0, 0.38);">
                        <div class="card-body">
                            <div class="row">
                                <!--<div class="col-md-3 col-lg-3 center">-->
                                <!--    <img class="rounded-circle" src="https://www.alhprops.com/public/media/profiles/61123b7b934e6.jpeg" width="80">-->
                                <!--</div>-->
                                <div class="col-md-12 col-lg-12 d-flex justify-content-between">
                                    <h6>Dina Remy</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <!--<h6>Regina, Saskatchewan</h6>-->
                                </div>
                                <div class="container"><hr>
                                <p>
                                Though I was facing some problems with getting all the details I needed for the QuickPay option, the representative who helped me managed to keep his composure and remained professional. Impressed by the way they handle challenges.  They had a bank draft hand delivered to my work the next day!  Thanks Shelly from VINCash.  I needed the money for a down payment on my Range Rover and you came through.  
                                </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 pad">
                    <div class="card" style="border-color: 0.5px solid rgba(0, 0, 0, 0.38);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 d-flex justify-content-between">
                                    <h6>Eva</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                                    <!--<h6>Ohio , Midwestern</h6>-->
                                <div class="container"><hr>
                                    <p>
                                        We're a local car dealer and we put our all of our non-saleable vehicles through VINCash. These guys know how to find you top dollar whether it may be selling to a provincial auction or exporting out of the country. Hassle-free and lets us focus on our business. They have even taken a quad and a school bus of our hands!
                                    </p>
                                </div>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features section starts
================================================== -->
    <section class="revie">
        <div class="container pt-5">
            <div class="row align-items-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-md-6 col-lg-6 col-12">
                    <h1 class="title-review text-white" data-aos="fade-up">Check out why people think <span class="text-dark">VIN Cash</span> is the easiest way to sell cars</h1>
                   <button class="btn btn-white mt-5 mb-2" id="scrollToTopBtn">
                        <a href="#">Get Offer</a>
                    </button>
                </div>
                <div class="col-md-6 col-lg-6 col-12" data-aos="fade-down">
                    <div class="text-center">
                        <img class="img-fluid" src="public/images/Part4 (1).png" width="300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features section ends
================================================== -->

<!-- cta section starts
================================================== -->

<div class="pb-4" style="background-color: #E5F0FF;">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-12 col-lg-12 col-12 mt-5 text-center">
                <h1 class="title">The Simple Way to Sell your Car</h1>
            </div>
        </div>
        <div class="row py-5 justify-content-center" data-aos="zoom-in">
            <div class="col-lg-4 col-md-4 col-12"></div>
            <div class="col-md-4 col-lg-4 col-12">
                <div class="card" style="background-color:#009eeb!important;">
                    <div class="card-body">
                         <form method="POST">
                        @csrf
                        <h2 class="text-center text-white mt-4 mb-4">LET'S CONNECT!</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="vin_num" value="" placeholder="VIN" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="km" value="" placeholder="Mileage" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="postal_code" value="" placeholder="Enter Postal Code" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 text-center">
                            <button class="btn btn-vin mt-3 mb-3" type="submit" style="font-size: 20px;border-radius:14px;"><b>GET</b> <span class="color-blue"><b>OFFER</b></span></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 offer">
                <img class="img-fluid" src="{{asset('public/images/Part5_FooterIcon.png')}}" width="200">
            </div>
        </div>
        <div class="my-5">
            <p class="text-center font-36">We always love to hear from you</p>
            <h3 class="text-center title" >
                <img class="img-fluid" src="{{asset('public/images/Vector (2).png')}}" width="50">&nbsp;&nbsp;
                {!! App\Models\Setting::where('title','phone')->first()->description !!}</h3>
        </div>
    </div>
</div>


<script>
        document.getElementById('scrollToTopBtn').addEventListener('click', function() {
            // Scroll to the top of the page
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

</script>


@endsection
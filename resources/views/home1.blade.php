@extends('welcome')
@section('content')

<style>
 .common_hero_section {
        position: relative;
        height: 460px;
    }
    
    .common_hero_section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index:2;
        background-color: rgba(0,0,0,0.4);
    }

    .common_hero_section .bg_img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
    }

    .heading {
        position: relative;
        font-size: 3rem;
        line-height: 80px;
        font-weight: 900;
        letter-spacing: 0;
        color: #fff;
        margin-bottom: 0;
        z-index:3;
    }
    
    .common_hero_section .container, .common_hero_section .row {
        height: 100%;
    }

    .common_hero_section .content-align {
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .contact_us_section, .job_section {
        padding-top: 90px;
        padding-bottom: 60px;
    }

</style>


<a id="get-offer-btn" class="text-center">Get Offer Here</a>

<div class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <!--<div class="col-12 font-30 d-sm-none d-block text-center mb-4" data-aos="zoom-in">-->
            <!--    <p>Get a firm buy offer on your car</p>-->
            <!--</div>-->
            <div class="col-md-7 col-lg-7 col-12 order-sm-1 order-2 banner-text">
                <h1 class="font-72 weight-700" data-aos="fade-down">Sell your car for</h1>
                <h1 class="font-72 weight-700" data-aos="fade-down">cash with</h1>
                <h1 class="font-72 weight-700" data-aos="fade-down"><span class="color-blue">VIN</span> CASH</h1>
                <img class="img-fluid banner-pic" src="{{asset('public/images/1_HeaderIcons.png')}}" width="500">
                
            </div>
            <div class="col-md-5 col-lg-5 col-12 order-sm-2 order-1" data-aos="fade-up">
                <div class="card" style="margin-top:-2rem;">
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
                                            <img src="https://givemethevin.com/assets/tooltip-vin.jpg" width="100%"><br>
                                            The VIN common locations are the driver's side dashboard and the door post.
                                    </div>
                                </span>
                                </label>
                            </div>
                            <input type="text" class="form-control" name="" value="" placeholder="17 Digits VIN">
                        </div>
                        
                            <div class="form-group">
                                <label>Mileage</label>
                                <input type="text" class="form-control" name="" value="" placeholder="KMs">
                            </div>
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" name="" value="" placeholder="Enter Postal Code">
                            </div>
                        
                        <div class="mt-3">
                            <div class="col-lg-12 col-md-12 col-12">
                                <a class="btn btn-primary btn-lg btn-block mt-5 mb-3"  href="{{route('veh_multi')}}">Get offer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How it works? -->

<div class="text-center mt-5">
    <h2 class="title mb-2 mt-5" data-aos="zoom-in">Sell your car in 3 easy steps</h2>
    <p class="sub-text mb-5" data-aos="zoom-in">We make it faster and easier to sell your car. All you need to do is follow three simple steps.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="3000">
                <div class="pad">
                    <img class="img-fluid" style="border-radius:15px;" src="{{asset('public/images/Step-new-1.jpg')}}" alt="deal" width="250">
                </div>
                <div class="mt-5" style="width:250px;margin:auto;">
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
                <p class="float-right color-blue font-24">John Clay Wolfe</p>
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
                                <div class="col-md-3 col-lg-3 center">
                                    <img class="rounded-circle" src="images/users.png">
                                </div>
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
                                <div class="container">
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
                                <div class="col-md-3 col-lg-3 center">
                                    <img class="rounded-circle" src="https://specials-images.forbesimg.com/imageserve/60aed8457da7cba25bf94d8e/416x416.jpg?background=000000&cropX1=0&cropX2=1080&cropY1=0&cropY2=1080" width="80">
                                </div>
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
                                <div class="container">
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
                                <div class="col-md-3 col-lg-3 center">
                                    <img class="rounded-circle" src="https://lh3.googleusercontent.com/a-/AOh14GhM6PZ2gwrDhZI_KJp0R6qMxWARcNtJxppER-FS=s500" width="80">
                                </div>
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
                                <div class="container">
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
                                <div class="col-md-3 col-lg-3 center">
                                    <img class="rounded-circle" src="https://d19cgyi5s8w5eh.cloudfront.net/img/914e7e5bea755c362ff192b4d1a1e2da6bd6fbe6" width="80">
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <h6>Kevon Gonku</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h6>Brandon, Manitoba</h6>
                                </div>
                                <div class="container">
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
                                <div class="col-md-3 col-lg-3 center">
                                    <img class="rounded-circle" src="https://www.alhprops.com/public/media/profiles/61123b7b934e6.jpeg" width="80">
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <h6>Dina Remy</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h6>Regina, Saskatchewan</h6>
                                </div>
                                <div class="container">
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
                                <div class="col-md-3 col-lg-3 center">
                                    <img class="rounded-circle" src="https://webtend.net/demo/html/seomun/assets/images/client_1.png" width="80">
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <h6>Eva</h6>
                                    <div class="color-yellow">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h6>Ohio , Midwestern>
                                </div>
                                <div class="container">
                                    <p>
                                    They have great service, quality products and we trust them. We value a local relationship and the impact it has on our community. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Risus commodo viverra maecenas accumsan lacus vel facilisis.  
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
                    <button class="btn btn-white mt-5 mb-2">
                        <a href="#">See all Reviews</a>
                    </button>
                </div>
                <div class="col-md-6 col-lg-6 col-12" data-aos="fade-down">
                    <div class="text-center">
                        <img class="img-fluid" src="images/Part4 (1).png" width="300">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <h1 class="mt-5 text-center">Frequently Asked Questions (FAQ’S)</h1>
    
    <section class="common_hero_section mt-5">
       <img src="{{asset('public/images/FAQ_Image.png')}}" alt="FAQ" class="bg_img img-fluid"> 
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div data-aos="fade-down" class="content-align aos-init aos-animate">
                   <!--<h1 class="heading">Frequently Asked Questions (FAQ’S)</h1>-->
                </div>
             </div>
          </div>
       </div>
    </section>
    <section id="dtr-footer-global" class="dtr-pt-7 dtr-pb-5 dtr-sm-mb-30px text-center">
    <div class="container mt-5">
        
        <div id="main">
            <div class="container">
                <div class="accordion" id="faq">
                    <div class="card">
                        <div class="card-header" id="faqhead1">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">How do I cash my payment from VinCash?</a>
                        </div>
                        <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body">
                                 You can cash our bank drafts at your nearest financial institution with no hold. You’ll also get the receipt and the teller's copy of the draft, so you don’t have to spend time explaining anything to your bank’s representative. If you don’t like drafts, try our QuickPay option for faster cash.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead0">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq0"
                            aria-expanded="true" aria-controls="faq0">Does VinCash buy bikes/ATV’s/RV’s?</a>
                        </div>
        
                        <div id="faq0" class="collapse" aria-labelledby="faqhead0" data-parent="#faq">
                            <div class="card-body">
                               Yes! If it rolls on tires or tracks, bring it on. We’ve bought many commercial trucks, busses, food trucks, trailers, heavy machinery, heavy equipment, ambulances, limos, bikes, ATVs, and RVs in the past—and we want more of them. Note that we may take a little longer to evaluate these vehicles, so hold tight while we come up with the best cash offer for you.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">Will you buy my car with hail damage, dents, or other bodywork needs?</a>
                        </div>
        
                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body">
                                Yes! As long as you are honest and up-front with us about the condition of your vehicle, we are fine with buying your car in any condition. Make sure to disclose all the necessary details about your vehicle with pictures and descriptions to reduce the likelihood of being misquoted.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">Will you buy my salvage title car?</a>
                        </div>
        
                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body">
                                 YES. All salvage-titled vehicles have, at one point, suffered damage equal to at least 50% of the vehicle’s value, impacting both the buyer and the seller. Submit your VIN today so we can give you our best cash offer.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead4">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                            aria-expanded="true" aria-controls="faq4">Will you buy my car that doesn’t run or is making weird sounds?</a>
                        </div>
        
                        <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                            <div class="card-body">
                                Yes. Provided you share all the necessary details about your vehicle, we are happy to make offers on mechanically-compromised cars.  
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead5">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                            aria-expanded="true" aria-controls="faq5">Are your offers negotiable?</a>
                        </div>
        
                        <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                            <div class="card-body">
                                Yes. We know you want the best deal, and we want that too! While our buying team makes every effort to get an accurate value for your car, we’re always open for negotiations if you’re not happy with our first offer.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead6">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                            aria-expanded="true" aria-controls="faq6">Who inspects my car before you pick it up? Do I have to drive it to your location?</a>
                        </div>
        
                        <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                            <div class="card-body">
                                Our transporter will inspect your vehicle, match it to the description you have provided, and exchange the documentation for payment. You don’t have to come to us; we’ll come to you.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead7">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                            aria-expanded="true" aria-controls="faq7">Can I sell you a leased car?</a>
                        </div>
                        <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                            <div class="card-body">
                                Yes, we buy leased cars as long as you provide us with the correct information. Be sure you provide us with all the information about your leaseholder (bank, credit union, or the car’s finance company) and the current payoff amount.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead8">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                            aria-expanded="true" aria-controls="faq8">What if I owe more than your purchase offer but still want to sell? </a>
                        </div>
                        <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                            <div class="card-body">
                                Don’t fret; this isn’t uncommon. The difference between our purchase offer and the amount owed is called negative equity. We offer a variety of simple options in this scenario. Submit your VIN today and have a representative walk you through your options.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead9">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                            aria-expanded="true" aria-controls="faq9">What happens to all of the cars you purchase?</a>
                        </div>
                        <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                            <div class="card-body">
                                We redistribute them to dealers and other markets at a small margin.  We’ve even ship vehicles around the globe!    
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead10">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                            aria-expanded="true" aria-controls="faq10">How long will it be until my bank receives the payoff?</a>
                        </div>
                        <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                            <div class="card-body">
                                We will fund your payoff immediately — we want the lien cleared as badly as you want the vehicle paid off! It can take a few days for your bank to process the payoff, which is why we quote a 10-day payoff for your financial institution. We cannot sell your vehicle until the lien is cleared.    
                            </div>
                        </div>
                    </div>
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
        <div class="row py-5 justify-content-center">
            <div class="col-lg-4 col-md-4 col-12"></div>
            <div class="col-md-4 col-lg-4 col-12">
                <div class="card" style="background-color:#009eeb!important;">
                    <div class="card-body">
                        <h2 class="text-center text-white mt-4 mb-4">LET'S CONNECT!</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="VIN">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="Mileage">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="Enter Postal Code">
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 text-center">
                            <a class="btn btn-vin mt-3 mb-3" href="{{route('veh_multi')}}" style="font-size: 20px;border-radius:14px;"><b>GET</b> <span class="color-blue"><b>OFFER</b></span></a>
                        </div>
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
                800-123-4567</h3>
        </div>
    </div>
</div>




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


@endsection
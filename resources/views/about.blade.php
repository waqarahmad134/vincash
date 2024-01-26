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
        background-color: rgba(0,0,0,0.4);
        z-index:2;
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
        object-position: top;
    }

    .heading {
        position: relative;
        font-size: 66px;
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

    .contact_us_section .btn-get-bid, .job_section .btn-get-bid {
        font-size: 23px;
        line-height: 25px;
        letter-spacing: 0;
        padding: 0.75rem;
        width: 100%;
        max-width: 300px;
        color: #fff;
        background: #4267b2 0 0 no-repeat padding-box;
        -webkit-box-shadow: 0 3px 6px #00000029;
        box-shadow: 0 3px 6px #00000029;
        border-radius: 5px;
    }
    
    
    .contact_us_section .contact_form .text, .job_section .contact_form .text {
        font-size: 20px;
        line-height: 30px;
        letter-spacing: 0;
        color: #000;
    }


</style>


<!-- cta section starts
================================================== -->
<section class="common_hero_section">
   <img src="{{asset('public/images/Vin_ContactUs1.png')}}" alt="" class="bg_img"> 
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div data-aos="fade-down" class="content-align aos-init aos-animate">
               <h1 class="heading">About Us</h1>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="container">
   <section class="contact_us_section">
      <div class="container">
         <div class="row">
            <div class="col-lg pr-lg-4">
               <div class="content">
                  <h2 data-aos="fade-right" data-aos-offset="0" class="title aos-init aos-animate">About US?</h2>
                  <div>
                  <p data-aos="fade-right" data-aos-offset="0" class="text aos-init aos-animate">{!! App\Models\Setting::where('title','about_us')->first()->description !!}
                  </p>
                  </div>
                
               </div>
            </div>
          
         </div>
      </div>
   </section>
</div>

@endsection
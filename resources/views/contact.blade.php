@extends('welcome')
@section('content')

<style>
    .common_hero_section {
        position: relative;
        height: 560px;
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
    
    a:hover{
        text-decoration:none;
    }


</style>


<!-- cta section starts
================================================== -->
<section class="common_hero_section">
   <img src="{{asset('public/images/Vin_ContactUs2.png')}}" alt="" class="bg_img"> 
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div data-aos="fade-down" class="content-align aos-init aos-animate">
               <h1 class="heading">Contact Us</h1>
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
                  <h2 data-aos="fade-right" data-aos-offset="0" class="title aos-init aos-animate">Looking for a bid?</h2>
                  <p data-aos="fade-right" data-aos-offset="0" class="text aos-init aos-animate">Are you trying to sell your Car?<br>
                     Truck? Van? SUV? Motorcycle? Quad? Fifth Wheel? RV? Trailer? missing the word Quad?
                  </p>
                  <a href="{{route('homes')}}" data-aos="fade-up" data-aos-offset="0" data-aos-delay="250" class="btn btn-get-bid aos-init aos-animate">Get an instant
                  bid offer.</a>
               </div>
            </div>
            
            <div class="col-lg pl-lg-4">
               <div data-aos="fade-left" data-aos-offset="0" class="contact_form aos-init aos-animate">
                  <p class="text">Email Billy anytime for advise or questions regarding your vehicle concerns.<br>
                    Get $100 if we can’t beat others<br>
                    “With our Last Look Policy.... <a href="{{route('homes')}}" >best offer.</a>”
                  </p>
                  <div id="loaderIcon" class="text-center spinner-border text-primary" style="display:none;margin:auto" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                  <form method="POST" action="{{route('send_message')}}">
                      @csrf
                     <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="full_name">Full Name</label> 
                            <input type="text" id="full_name" value="" class="form-control pristine untouched" aria-required="true" aria-invalid="false" required> 
                            <small class="invalid-feedback animated fadeInDown faster"></small></div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" id="email" value="" class="form-control pristine untouched" aria-required="true" aria-invalid="false" required> 
                            <small class="invalid-feedback animated fadeInDown faster"></small></div>
                        <div class="form-group col-md-4">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" value="" class="form-control pristine untouched" aria-required="true" aria-invalid="false" required> 
                            <small class="invalid-feedback animated fadeInDown faster"></small></div>
                        <div class="form-group col-md-4">
                            <label for="zip">Postal Code</label> 
                            <input type="text" id="zip" value="" class="form-control pristine untouched" aria-required="true" aria-invalid="false" required>
                            <small class="invalid-feedback animated fadeInDown faster"></small>
                            </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-12"><label for="message">Message</label>
                            <textarea id="message" id="message" class="form-control pristine untouched" aria-required="true" aria-invalid="false" style="overflow: hidden; overflow-wrap: break-word; height: 62px;" required></textarea> 
                            <small class="invalid-feedback animated fadeInDown faster"></small>
                        </div>
                     </div>
                    
                  </form>
                   <button onclick="callAjax();" class="submit btn btn-primary btn-lg btn-block">Send Message</button>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>










<script>
function callAjax(e){
   event.preventDefault();
   
   full_name = $('#full_name').val();
   email = $('#email').val();
   phone = $('#phone').val();
   zip = $('#zip').val();
   message = $('textarea#message').val()
   
   if(full_name == '' || email=='' || phone == '' || zip=='')
   {
      toastr.error('Some fields are missing', 'Info!'); 
      return false;
   }
   
    $('#loaderIcon').show();
    $('.submit').hide();
    $.ajax({
        type: "POST",
        url: "{{route('send_message')}}",
        data:{
                "_token": "{{ csrf_token() }}",
                'full_name':full_name,
                'email':email,
                'phone':phone,
                'zip':zip,
                'message':message,
               
            },
        success: function(response){
            console.log(response);
            toastr.success('Message Sent Successfully', 'Info!');
            $('#full_name').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#zip').val('');
            $('#message').val('');
        },
        complete: function(){
            $('#loaderIcon').hide();
             $('.submit').show();
        }
    });
}
</script>
@endsection
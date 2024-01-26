@extends('welcome')
@section('content')

<style>
    
    #main {
      margin: 50px 0;
    }
    
    #main #faq .card {
      margin-bottom: 30px;
      border: 0;
    }
    
    #main #faq .card .card-header {
        border: 0;
        -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
        box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
        border-radius: 2px;
        padding: 0;
    }
    
    #main #faq .card .card-header .btn-header-link {
      color: #fff;
      display: block;
      text-align: left;
      background: #F4F5FA;
      color: #222;
      padding: 20px;
    }
    
    #main #faq .card .card-header .btn-header-link:after {
      content: "\f106";
      font-family: 'FontAwesome';
      font-weight: 900;
      float: right;
    }
    
    #main #faq .card .card-header .btn-header-link.collapsed {
      background: #F4F5FA;
      color: #000000;
    }
    
    #main #faq .card .card-header .btn-header-link.collapsed:after {
      content: "\f107";
    }
    
    #main #faq .card .collapsing {
      
      line-height: 30px;
    }
    
    #main #faq .card .collapse {
      border: 0;
    }
    
    #main #faq .card .collapse.show {
      background: ligtgray;
      line-height: 30px;
      color: #222;
    }

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

<!-- cta section starts
================================================== -->
<section class="common_hero_section">
   <img src="{{asset('public/images/FAQ_Image.png')}}" alt="FAQ" class="bg_img img-fluid"> 
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div data-aos="fade-down" class="content-align aos-init aos-animate">
               <h1 class="heading">Frequently Asked Questions (FAQ’S)</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- cta section starts
================================================== -->


<section id="dtr-footer-global" class="dtr-pt-7 dtr-pb-5 dtr-sm-mb-30px">
    <div class="container mt-5">
        <div id="main">
            <div class="container">
                <div class="accordion" id="faq">
                    @foreach($faqs as $key=>$faq)
                    <div class="card">
                        <div class="card-header" id="faqhead{{$key}}">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq{{$key}}"
                            aria-expanded="true" aria-controls="faq{{$key}}">{{$faq->question}}</a>
                        </div>
                        <div id="faq{{$key}}" class="collapse " aria-labelledby="faqhead{{$key}}" data-parent="#faq">
                            <div class="card-body">
                                <p>
                                {{$faq->answer}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                   
                </div>
            </div>
        </div>
    </div>
</section>



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
@extends('welcome')
@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,500;0,700;1,500;1,700&display=swap');
    
    .font-30{
        font-size: 30px;
    }
    .font-28{
        font-size: 28px;
    }
    .font-20{
        font-size: 20px;
    }
    .font-18{
        font-size: 18px;
    }
    .weight-400{
        font-weight: 400;
    }
    .weight-500{
        font-weight: 500;
    }
    .weight-600{
        font-weight: 600;
    }
    .weight-normal{
        font-weight: normal;
    }

    text{
        font-family: 'Lato', sans-serif;
    }
    h6{
        font-family: 'Lato', sans-serif;
    }
    h5{
        font-family: 'Lato', sans-serif;
    }

    .color-blue{
        color:#00A3ED;;
    }
</style>
<div style="background-color:#F4F5FA; padding-top:150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <img class="img-fluid mb-3" src="{{asset('public/images/sucess.png')}}" alt="">
                <h5 class="font-30  weight-500 color-blue mb-4">Thank you for the opportunity to buy your vehicle</h5>
                <h6 class="card-subtitle mb-4">A representative will contact you soon.</h6>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        Confirmation ID: 123456789
                    </div>
                    <div class="card-body row align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h6 class="card-subtitle mb-4 color-blue">We have received the request to sell the vehicle with following details:</h6>
                            <h6 class="card-subtitle mb-2 text-muted">3C63RRGL4EG239701</h6>
                            <!--<h6 class="card-subtitle mb-2">Suzuki Sedan 2015 (SX4)</h6>-->
                            <h6 class="card-subtitle mb-2">{{$vec->make}} {{$vec->model}} {{$vec->year}}</h6>
                            <h6 class="card-subtitle mb-4">{{$vec->km}} Kms</h6>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('public/images/bx_error.png')}}" alt="">
                                <span class="text-muted"> &nbsp;The particular vehicle exceeds a system parameter for <span class="color-blue">auto-bid</span>. One of our agents will be in contact with you shortly.</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid" src="{{asset('public/images/Bid_Amount.png')}}" alt="bid-amount" width="80%">
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 pb-5 justify-content-around">
            <div class="col-lg-4">
                <a class="btn btn-secondary btn-lg btn-block"  onClick="window.print()">Print this page</a>
            </div>
        </div>
    </div>


</div>    

@endsection
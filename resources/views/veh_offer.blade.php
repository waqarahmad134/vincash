@extends('welcome')
@section('content')

<style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,500;0,700;1,500;1,700&display=swap');
        
        .font-48{
            font-size: 48px;
        }
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
                <div class="card text-white" style="background-color:#00A3ED;">
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-3 ">Offer range upto</h6>
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <img src="{{asset('public/images/cash.png')}}" alt="">
                            <span class="card-subtitle font-48">$2500 - 2700</span>
                        </div>
                        <h6 class="card-subtitle mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="damage_history">
                    <input type="radio" id="control_01" name="select" value="1" checked>
                    <label for="control_01">Accept </label>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="damage_history">
                    <input type="radio" id="control_02" name="select" value="2">
                    <label for="control_02">Decline</label>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="damage_history">
                    <input type="radio" id="control_03" name="select" value="3">
                    <label for="control_03">Considering</label>
                </div>
            </div>
        </div>
        <h6 class="mb-3 text-center">Accepting this offer does not mean you obliged to sell us. A buyer will evaluate this information and give you an exact bid for this vehicle.</h6>
        <div class="row mt-5 pb-5 justify-content-around">
            <div class="col-lg-4 col-md-4 col-12">
                <a class="btn btn-primary btn-lg btn-block"  href="">Submit your Response</a>
            </div>
        </div>
    </div>


</div>    

@endsection
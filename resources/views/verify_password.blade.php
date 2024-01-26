@extends('welcome')
@section('content')


<style>
    .spacing{
        padding-left:15%;
        padding-right:15%;
        
    }
</style>

<a id="get-offer-btn" class="text-center">Get Offer Here</a>

<div class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="card" >
                    <div class="card-body spacing">
                        <h2 class="text-center mb-4 mt-4 font-36">Reset password</h2>
                        <div class="form-group">
                            <label>E-mail Address</label>
                            <input type="text" class="form-control" name="" value="" placeholder="Enter your email">
                        </div>
                        <div class="mt-3">
                            <div class="col-lg-12 col-md-12 col-12">
                                <a class="btn btn-primary btn-lg btn-block mt-5 mb-3"  href="{{route('veh_multi')}}">Send Password Reset Link</a>
                            </div>
                        </div>
                        <h5 class="text-center mt-5 mb-3">Already know your password?<a href="{{route('login')}}">&nbsp; Login here</a></h5>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>




@endsection
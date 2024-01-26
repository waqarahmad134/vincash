@extends('welcome')
@section('content')


<style>
    .spacing{
        padding-left:15%;
        padding-right:15%;
        
    }
</style>

<a id="get-offer-btn" class="text-center">Reset password</a>

<div class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="card">
                    <div class="card-body spacing">
                        <h2 class="text-center mb-4 mt-4 font-36">Reset password</h2>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="mt-3">
                            <div class="col-lg-12 col-md-12 col-12">
                                <a class="btn btn-primary btn-lg btn-block mt-5 mb-3"  href="{{route('veh_multi')}}">Change Password</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>




@endsection
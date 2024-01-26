@extends('admin_welcome')
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
                <div class="card" style="margin-top:-2rem;">
                   
                    <form method="POST">
                        @csrf
                    <div class="card-body spacing">
                        <h2 class="text-center mb-4 mt-4 font-36">Dealer Login</h2>
                         @if(session()->has('msg'))
                             <div class="alert alert-danger">{{session()->get('msg')}}</div>
                        @endif
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="smith@gmail.com">
                             @if($errors->has('email'))
                                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" value="{{old('password')}}" placeholder="Enter Password">
                             @if($errors->has('password'))
                                        <div class="error text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                        </div>
                        <div class="mt-3">
                            <div class="col-lg-12 col-md-12 col-12">
                                <button class="btn btn-primary btn-lg btn-block mt-5 mb-3" type="submit">Login</button>
                            </div>
                        </div>
                      
                    </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>




@endsection
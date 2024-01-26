@extends('welcome')
@section('content')


<style>
    .spacing{
        padding-left:15%;
        padding-right:15%;
    }
</style>


<div class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="card" style="margin-top:-2rem;">
                    <form method="POST">
                        @csrf
                    <div class="card-body spacing">
                        <h2 class="text-center mb-4 mt-4 font-36">Dealer Registration</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input required type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" >
                                    @if($errors->has('first_name'))
                                        <div class="error text-danger">{{ $errors->first('first_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input required type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                      @if($errors->has('last_name'))
                                        <div class="error text-danger">{{ $errors->first('last_name') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Dealership Company</label>
                                    <input required type="text" class="form-control" name="dealer_company" value="{{ old('dealer_company') }}">
                                      @if($errors->has('dealer_company'))
                                        <div class="error text-danger">{{ $errors->first('dealer_company') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>City</label>
                                    <input required type="text" class="form-control" name="city" value="{{ old('city') }}">
                                      @if($errors->has('city'))
                                        <div class="error text-danger">{{ $errors->first('city') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>State</label>
                                    <input required type="text" class="form-control" name="state" value="{{ old('state') }}">
                                      @if($errors->has('state'))
                                        <div class="error text-danger">{{ $errors->first('state') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input required type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                                      @if($errors->has('zip'))
                                        <div class="error text-danger">{{ $errors->first('zip') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input required type="text" class="form-control" name="email" value="{{ old('email') }}">
                                      @if($errors->has('email'))
                                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input required type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                      @if($errors->has('phone'))
                                        <div class="error text-danger">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input required type="text" class="form-control" name="password" value="{{ old('password') }}">
                                      @if($errors->has('password'))
                                        <div class="error text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input required type="text" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                      @if($errors->has('password_confirmation'))
                                        <div class="error text-danger">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="col-lg-12 col-md-12 col-12">
                                <button class="btn btn-primary btn-lg btn-block mt-5 mb-3"  type="submit">Register</button>
                            </div>
                        </div>
                        <h5 class="text-center mt-5 mb-3">Already have account?  <a href="{{route('login')}}"> Login </a></h5>
                    </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>




@endsection
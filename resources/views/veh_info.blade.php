@extends('welcome')
@section('content')



<style>
.img-thumb {
  max-height: 75px;
  border: 2px solid none;
   border-radius:3px;
  padding: 1px;
  cursor: pointer;
}
.img-thumb-wrapper {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid none;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>



<div style="background-color:#F4F5FA; padding-top:150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-28  weight-600">Vehicle Information</h5>
                       
                        <h6 class="card-subtitle mb-2 text-muted">{{$vec->trim}}</h6>
                        <h6 class="card-subtitle mb-1">{{$vec->make}} {{$vec->model}} {{$vec->year}}</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="card-subtitle mb-2">{{$vec->km}} Kms</h6>
                            <a href="{{route('homes')}}" class="btn btn-info">Start over with another vehicle</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{route('contact')}}" enctype="multipart/form-data" novalidate>
        @csrf
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="VehicleExterior">Vehicle Exterior (Color):</label>
                    <input type="text" class="form-control" id="VehicleExterior" name="exterior_color" value="{{old('exterior_color')}}" required>
                     @if($errors->has('exterior_color'))
                        <div class="error text-danger">{{ $errors->first('exterior_color') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Payoff">Payoff Information</label>
                    <p class="card-text font-18 weight-400 text-muted">Does your car have a payoff with a bank or lender?</p>
                    <div>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="chkpayoff" required autofocus>
                            <label class="onoffswitch-label" for="chkpayoff">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="payoff" style="display:none;">
                    <label class="font-20 weight-500">Payoff Bank / Lender</label>
                    <input type="text" class="form-control" id="VehicleExterior" name="payoff_bank" required autofocus>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500">Are you replacing this vehicle?</label>
                    <div>
                        <div class="onoffswitch">
                            <input type="checkbox" name="replace" class="onoffswitch-checkbox" id="myonoffswitch" autofocus>
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <p class="card-text font-18 weight-400 text-muted">Is your car a lease?</p>
                    <div>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="chklease" autofocus >
                            <label class="onoffswitch-label" for="chklease">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="lease" style="display:none;">
                    <label class="font-20 weight-500">Leasing Company</label>
                    <input type="text" class="form-control" id="VehicleExterior" name="lease" required autofocus>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" >Vehicle Condition</label>
                    <p class="card-text font-18 weight-400 text-muted">Does your vehicle need any repairs?</p>
                    <div>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="chkrepiar" required autofocus>
                            <label class="onoffswitch-label" for="chkrepiar">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="repair" style="display:none;">
                    <p class="card-text font-18 weight-400 text-muted">Estimate the cost of repair</p>                    
                    <!-- Repair Cost Section -->
                    <div class="form-group has-search">
                        <span class="fa fa-usd form-control-feedback"></span>
                        <input type="text" class="form-control" name="repair" required>
                    </div>
                </div>
            </div>
        </div>
        <h5 class="font-24 weight-600 mt-4" >Previous Damage History</h5>                 
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="damage_history">
                    <input type="radio" id="control_01" name="damage" value="No Previous Accidents" checked >
                    <label for="control_01">No Previous Accidents </label>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="damage_history">
                    <input type="radio" id="control_02" name="damage" value="Minor Damage" >
                    <label for="control_02">Minor Damage </label>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="damage_history">
                    <input type="radio" id="control_03" name="damage" value="Accident History" >
                    <label for="control_03">Accident History </label>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="damage_history">
                    <input type="radio" id="control_04" name="damage" value="Prevoius Airbag Deployed (Repaired)" >
                    <label for="control_04">Prevoius Airbag Deployed (Repaired) </label>
                </div>
            </div>
        </div>
        <h5 class="font-24 weight-600 mt-4" >Choose Vehicle Options</h5>                 
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="damage_history">
                    <input type="checkbox" id="ALLOY_WHEELS" name="select[]" value="20” ALLOY WHEELS" checked>
                    <label for="ALLOY_WHEELS">POWER SEATS </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="damage_history">
                    <input type="checkbox" id="TURBO_DIELSEL" name="select[]" value="3.5 TURBO DIELSEL">
                    <label for="TURBO_DIELSEL">LEATHER </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="damage_history">
                    <input type="checkbox" id="ECO_BOOST" name="select[]" value="3.6 ECO BOOST">
                    <label for="ECO_BOOST">SUNROOF </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="damage_history">
                    <input type="checkbox" id="WHEELS_DRIVE" name="select[]" value="4 WHEELS DRIVE">
                    <label for="WHEELS_DRIVE">NAVIGATION </label>
                </div>
            </div>
        </div>
        <h5 class="font-24 weight-600 mt-4" >Upload Photos</h5><br>   
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-12 input" style="margin:auto;">
                <input type="file" id="files" name="files[]" multiple  class="form-control files" / >
              
                
                <!--<input class="dropify" type="file" name="image">-->
            </div>
        </div><hr>
        <h5 class="font-24 weight-600 mt-4" >Contact Information</h5>
            @if(session()->has('msg'))
                 <div class="alert alert-success">{{session()->get('msg')}}</div>
            @endif
       
            
       
        <div class="row">
           
           <input type="hidden" value="{{$vec->id}}" name="vec_id">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-normal" for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
                     @if($errors->has('first_name'))
                        <div class="error text-danger">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-normal" for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                     @if($errors->has('last_name'))
                        <div class="error text-danger">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-normal" for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                     @if($errors->has('email'))
                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-normal" for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                     @if($errors->has('phone'))
                        <div class="error text-danger">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-normal" for="city">City</label>
                    <input type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                     @if($errors->has('city'))
                        <div class="error text-danger">{{ $errors->first('city') }}</div>
                    @endif
                </div>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 payment_method">
            <form action="/action_page.php">
                <div class="d-flex align-items-center p-2">
                    <input type="checkbox" id="getpaid" name="vehicle1" value="Bike">
                    <label for="getpaid">&nbsp;  How would you like to get paid?</label><br>
                </div>
                <select class="form-control" name="payment_method" >
                    <option value="BankDraft">Bank Draft</option>
                    <option value="Quickpay">Quickpay</option>
                </select>
            </form>
            </div>
        </div>
       

        <div class="row mt-4 pb-5 justify-content-center">
            <div class="col-lg-4">
                <button class="btn btn-primary btn-lg btn-block cssbuttongo" type="submit">Submit & Proceed</button>
            </div>
        </div>
    </div>
    </form>
</div>    



@endsection
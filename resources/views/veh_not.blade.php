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

.payment_method input[type=checkbox]{
                display: block!important;
        }
</style>


<div style="background-color:#F4F5FA; padding-top:150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <img class="img-fluid mb-3" src="{{asset('public/images/vector.png')}}" alt="">
                <h5 class="font-30  weight-500 color-blue mb-4">Error: Vehicle Not Found </h5>
                <h6 class="card-subtitle color-blue mb-4">Don’t worry. You can still proceed by providing details manauly.</h6>
            </div>
        </div>
    </div>
<form method="POST" action="{{route('add_new_vehicle')}}" enctype= multipart/form-data>
    @csrf
<div>
    <div class="container mt-5">
       
        <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Vehicle_Type">Vehicle Vin No.</label>
                    <input  type="text" name="vin_number" class="form-control" id="vin_number" value="{{session()->get('vin_number')}}">
                    @if($errors->has('vin_number'))
                        <div class="error text-danger">{{ $errors->first('vin_number') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Vehicle_Type">Vehicle Type</label>
                    <select name="vehicle_type" class="form-control" id="Vehicle_Type">
                      
                        <option value="car">Car</option>
                        <option value="truck">Truck</option>
                        <option value="SUV">SUV</option>
                        <option value="others">Others</option>
                    </select>
                    @if($errors->has('vehicle_type'))
                        <div class="error text-danger">{{ $errors->first('vehicle_type') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Make">Make</label>
                    <input required type="text" name="make" class="form-control" id="Make" value="{{ old('make') }}">
                    @if($errors->has('make'))
                        <div class="error text-danger">{{ $errors->first('make') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Model">Model</label>
                    <input required type="text" name="model" class="form-control" id="Model" value="{{ old('model') }}" required>
                    @if($errors->has('model'))
                        <div class="error text-danger">{{ $errors->first('model') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Year">Year</label>
                    <input required type="text" name="year" class="form-control" id="Year" value="{{ old('year') }}" required>
                    @if($errors->has('year'))
                        <div class="error text-danger">{{ $errors->first('year') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Trim">Trim</label>
                    <input required type="text" name="trim" class="form-control" id="Trim" value="{{ old('trim') }}" required>
                    @if($errors->has('trim'))
                        <div class="error text-danger">{{ $errors->first('trim') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="KMs">KMs</label>
                    <input required type="text" name="kms" class="form-control" id="KMs" value="{{session()->get('kms')}}" required>
                    @if($errors->has('kms'))
                        <div class="error text-danger">{{ $errors->first('kms') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="font-20 weight-500" for="Postal">Postal Code</label>
                    <input required type="text" name="postal_code" class="form-control" id="Postal" value="{{session()->get('postal_code')}}" required>
                    @if($errors->has('postal_code'))
                        <div class="error text-danger">{{ $errors->first('postal_code') }}</div>
                    @endif
                </div>
            </div>
        </div>
      
        </form>
    </div>
 
    
<div style="background-color:#F4F5FA;">
 
      
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
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="chkpayoff"  autofocus>
                            <label class="onoffswitch-label" for="chkpayoff">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="payoff" style="display:none;">
                    <label class="font-20 weight-500">Payoff Bank / Lender</label>
                    <input type="text" class="form-control" id="VehicleExterior" name="payoff_bank"  autofocus>
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
                    <input type="text" class="form-control" id="VehicleExterior" name="lease"  autofocus>
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
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="chkrepiar"  autofocus>
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
                        <input type="text" class="form-control" name="repair" >
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
            <form  action="/action_page.php">
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
</div>
</form>
</div>    

<script>

$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
    var files = e.target.files,
    filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class=\"img-thumb-wrapper card shadow\">" +
            "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove</span>" +
            "</div>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".img-thumb-wrapper").remove();
          });
          
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } 
  else {
    alert("Your browser doesn't support to File API")
  }
});

</script>

@endsection
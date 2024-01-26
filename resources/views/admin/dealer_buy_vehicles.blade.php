@extends('admin.welcome')
@section('content')
<style>
    .btn
{
    border-radius:0px !important;
}
</style>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Dealer Buy Vehicles</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Dealer Buy Vehicles</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                
                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                               
                                <th>Vehicle ID</th>
                                <th>Vin Number</th>
                                <th>Vehicle Type</th>
                                <th>Year</th>
                                <th>Vehicle Make</th>
                                <th>Model</th>
                                <th>KMs</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                <th>Est. Price</th>
                                <th>Demand Price</th>
                                <th>Payment Method</th>
                              
                               
                            </tr>
                        </thead>
                   
                        <tbody>
                           @foreach($vehicles as $vec)
                           <tr>
                               <td>{{$vec->vehicle->id}}</td>
                               <td>{{$vec->vehicle->vin_number}}</td>
                               <td>{{$vec->vehicle->vehicle_type}}</td>
                               <td>{{$vec->vehicle->year}}</td>
                               <td>{{$vec->vehicle->make}}</td>
                               <td>{{$vec->vehicle->model}}</td>
                               <td>{{$vec->vehicle->km}}</td>
                               <td>{{$vec->vehicle->user->city}}</td>
                               <td>{{$vec->vehicle->postal_code}}</td>
                               <td>{{$vec->vehicle->est_price}}</td>
                               <td>{{$vec->vehicle->demand_price}}</td>
                               <td>{{$vec->payment_method}}</td>
                              
                           </tr>
                           @endforeach
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>










<script>


 
    
    
    
    var selectAllItems = "#select-all";
    var checkboxItem = ":checkbox";
    
    $(selectAllItems).click(function() {
    if (this.checked) {
        $(checkboxItem).each(function() {
          this.checked = true;
        });
    } else {
        $(checkboxItem).each(function() {
          this.checked = false;
        });
      }
      
    });
</script>
@endsection
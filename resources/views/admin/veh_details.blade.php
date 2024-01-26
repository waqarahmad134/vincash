@extends('admin.welcome')
@section('content')

<div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Vehicle Datatable</h2>
                </div>            
            </div>
        </div>
        
    <div class="container-fluid">
        <a href="{{route('all_vehicles')}}" class="btn btn-info mt-2"><i class="fa fa-arrow-left mr-2"></i>Back</a>
        <h2 class="mt-4">Vehicle Information</h2>
        <div class="row clearfix">
            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                    
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Exterior Color</h6>
                                    <span class="font700">
                                        {{$vec->vec_exterior_color ?? 'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                               
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                   
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Payoff Bank</h6>
                                    <span class="font700">
                                        @if(isset ($vec->pay_off_bank))
                                            {{$vec->pay_off_bank}}
                                        @else
                                            {{__('Not available')}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                   
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Lease</h6>
                                    <span class="font700">{{$vec->lease_company ?? 'No Data Available' }}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                  
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Replace Vehicle</h6>
                                    <span class="font700">{{$vec->replacing ??  'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                    
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Repair Cost</h6>
                                    <span class="font700">${{$vec->repair_cost ??  'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                               
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            
             <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                   
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Damage History</h6>
                                    <span class="font700">{{$vec->damage_history ?? 'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                   
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Estimated Price</h6>
                                    <span class="font700">${{$vec->est_price ?? 'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="number float-right text-right">
                                    <h6>Demand Price</h6>
                                    <span class="font700">${{$vec->demand_price ?? 'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
            <h2>Time Stamp : </h2>
        <div class="row clearfix">
            <div class="col-md-4 col-lg-4">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                    
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Created At</h6>
                                    <span class="font700">{{$vec->created_at->format('d-M Y')}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                               
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            
             <div class="col-md-4 col-lg-4">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                   
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Assign Dealer Date</h6>
                                    <span class="font700">{{$vec->timestamp->assign_dealer ?? 'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="card top_report">
                    <div class="">
                        <div class="body">
                            <div class="clearfix">
                                <div class="float-left">
                                   
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Sold Date</h6>
                                    <span class="font700">{{$vec->timestamp->buy_vehicle ?? 'No Data Available'}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
     

           
        </div>
        <h2>User Information</h2>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card top_report">
                    <div class="body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                        <h6>First Name</h6>
                                        <span class="font700" style="color:#00a3ed;">{{$vec->user->first_name ?? 'No Data Available'}}</span>
                                    </div><hr>
                                    <div class="">
                                        <h6>Last Name</h6>
                                        <span class="font700" style="color:#00a3ed;">{{$vec->user->last_name ?? 'No Data Available'}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                        <h6>Email</h6>
                                        <span class="font700" style="color:#00a3ed;">{{$vec->user->email ?? 'No Data Available'}}</span>
                                    </div><hr>
                                    <div class="">
                                        <h6>Contact No</h6>
                                        <span class="font700" style="color:#00a3ed;">{{$vec->user->phone ?? 'No Data Available'}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <h4>Vehicle Details</h4>
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Vec ID</th>
                                <th>Vin Number</th>
                                <th>Vehicle Type</th>
                                <th>Vehicle Make</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>KMs</th>
                                <th>Postal Code</th>
                                <th>Est. Price</th>
                                <th>Demand Price</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                            
                            <tr>
                                <td>1</td>
                                <td>{{$vec->id}}</td>
                                <td>{{$vec->vin_number}}</td>
                                <td>{{$vec->vehicle_type}}</td>
                                <td>{{$vec->make}}</td>
                                <td>{{$vec->model}}</td>
                                <td>{{$vec->year}}</td>
                                <td>{{$vec->km}}</td>
                                <td>{{$vec->postal_code}}</td>
                                <td>${{$vec->est_price}}</td>
                                <td>${{$vec->demand_price}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <h4>Vehicle Options</h4>
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Vehicle Option</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                            @foreach($vec->option as $key=>$option)
                            <tr>
                                <td>{{$key=$key+1}}</td>
                                <td>{{$option->option}}</td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <h2>Image</h2>
                    <div class="">
                        @foreach($vec->vehicleimage as $image)
                            <img src="{{asset('public/images')}}/{{$image->image}}" alt="{{$image->image}}" style="width:5% !important">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
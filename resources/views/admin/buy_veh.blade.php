@extends('admin.welcome')
@section('content')

<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Buy Vehicles Datatable</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Buy Vehicles DataTable</li>
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
                                <th>Serial No</th>
                                <th>Vec ID</th>
                                <th>Vin Number</th>
                                <th>Vehicle Type</th>
                                <th>Vehicle Make</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>KMs</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                <th>Dealer Name</th>
                                <th>Payment Method</th>
                                <!--<th>Read Price</th>-->
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($cards as $key=>$card)
                            <tr>
                                <td>{{$key = $key + 1}}</td>
                                <td>{{$card->vehicle_id}}</td>
                                <td>{{$card->vehicle->vin_number}}</td>
                                <td>{{$card->vehicle->vehicle_type}}</td>
                                <td>{{$card->vehicle->make}}</td>
                                <td>{{$card->vehicle->model}}</td>
                                <td>{{$card->vehicle->year}}</td>
                                <td>{{$card->vehicle->km}} km</td>
                                <td>{{$card->vehicle->user->city}}</td>
                                <td>{{$card->vehicle->postal_code}}</td>
                                <td><span >{{$card->dealer->first_name}} {{$card->dealer->last_name}}</span></td>
                                <td>{{$card->payment_method}}</td>
                                <!--<td><span >{{$card->amount}} $</span></td>-->
                            </tr>
                            @endforeach
                           
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
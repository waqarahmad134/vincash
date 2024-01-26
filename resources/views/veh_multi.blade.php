@extends('welcome')
@section('content')

<div style="background-color:#F4F5FA; padding-top:150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <h5 class="font-30  weight-500 color-blue mb-4">We have found the following vehicles that match the given VIN:</h5>
                <h6 class="mb-4 text-muted">.</h6>
            </div>
        </div>
    </div>
    
   <div class="container">
    <h6 class="mb-4">Please select the correct vehicle:</h6>
    <div class="row mb-3">
        <?php $count = 1; ?>
        @foreach($vec as $key => $vehicle)
        <div class="col-lg-6 col-md-6 col-12">
            <div class="damage_history">
                <input type="radio" id="control_0{{ $count }}" name="select">
                <label class="text-left" for="control_0{{ $count }}">
                    <p>Vehicle Year: {{ $vehicle->year }} </p>
                    <p>Vehicle Model: {{ $vehicle->model }} </p>
                    <p>Vehicle Make: {{ $vehicle->make }} </p>
                </label>
            </div>
        </div>
        <?php $count++; ?>
        @endforeach
    </div>
    <div class="row mt-5 pb-5 justify-content-around">
        <div class="col-lg-4 col-md-4 col-12">
            <a class="btn btn-primary btn-lg btn-block" href="{{ route('veh_info', ['vehicle' => $vehicle->id]) }}">Submit your Response</a>
        </div>
    </div>
</div>



</div>    

@endsection
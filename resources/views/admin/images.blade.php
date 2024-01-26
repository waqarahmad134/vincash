@extends('welcome')
@section('content')

<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Images</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Images</h2>
                    </div>
                    <div class="body">
                        <input type="file" class="dropify">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Images </h2>
                    </div>
                    <div class="body">
                        <input type="file" class="dropify">
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Images </h2>
                    </div>
                    <div class="body">
                        <input type="file" class="dropify">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Images </h2>
                    </div>
                    <div class="body">
                        <input type="file" class="dropify">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
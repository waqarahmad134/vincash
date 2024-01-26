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
                <h2>Memo Table</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Memo Table</li>
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
                                <th>Sr No </th>
                                <th>Message</th>
                                <th>Dealer</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($memo as $key=>$memo)
                            <tr>
                                <td>{{$key=$key+1}}</td>
                                <td>{{$memo->message}}</td>
                                <td>{{$memo->dealer->first_name}} {{$memo->dealer->last_name}}</td>
                                <td>{{$memo->created_at->format('d M Y')}}</td>
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
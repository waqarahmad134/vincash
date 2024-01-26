@extends('admin.welcome')
@section('content')

<div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Messages</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Messages DataTable</li>
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
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom shadow">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Zip</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                       
                            <tbody>
                              @foreach($messages as $key=>$message)
                              <tr>
                                  <td>{{$key= $key+1}}</td>
                                  <td>{{$message->full_name}}</td>
                                  <td>{{$message->email}}</td>
                                  <td>{{$message->phone}}</td>
                                  <td>{{$message->zip}}</td>
                                  <td>{{$message->message}}</td>
                                  <td><a class="btn btn-secondary text-white"  href="mailto:{{$message->email}}"><i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp; Send Email</a></td>
                                  <!--<td><a class="btn btn-danger btn-sm" href="{{route('delete_message',['id'=>$message->id])}}">Delete</a></td>-->
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
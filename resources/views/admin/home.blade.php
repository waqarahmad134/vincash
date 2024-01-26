@extends('admin.welcome')
@section('content')

<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Dashboard</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Change Password</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body shadow">
                            <div class="clearfix">
                                <div class="float-left">
                                    <i class="fa fa-2x fa-car text-col-blue"></i>
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Total Vehicles</h6>
                                    <span class="font700">{{$vehicles->count()}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="{{$vehicles->count()}}"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body shadow">
                            <div class="clearfix">
                                <div class="float-left">
                                    <i class="fa fa-2x fa-user text-col-green"></i>
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Total Dealers</h6>
                                    <span class="font700">{{$dealers->count()}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="{{$dealers->count()}}"></div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body shadow">
                            <div class="clearfix">
                                <div class="float-left">
                                    <i class="fa fa-2x fa-envelope text-col-blue"></i>
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Total Messages</h6>
                                    <span class="font700">{{$messages->count()}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="{{$messages->count()}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card top_report">
                    <div class="">
                        <div class="body shadow">
                            <div class="clearfix">
                                <div class="float-left">
                                    <i class="fa fa-2x fa-thumbs-up text-col-yellow"></i>
                                </div>
                                <div class="number float-right text-right">
                                    <h6>Total FAQ's</h6>
                                    <span class="font700">{{$faqs->count()}}</span>
                                </div>
                            </div>
                            <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                                <div class="progress-bar" data-transitiongoal="{{$faqs->count()}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="padding:40px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
            <form method="POST" action="{{route('change_password')}}">
                @csrf
                <div class="mb-2">
                    <label>Old Password</label><br>
                    <input placeholder="Old Password" name="old_password" type="text" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>New Password</label><br>
                    <input placeholder="New Password" name="new_password" type="text" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Confirm Password</label><br>
                    <input placeholder="Confirm Password" name="confirm_password" type="text" class="form-control" required>
                </div>
                
                 <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection
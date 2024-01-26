@extends('admin.welcome')
@section('content')

<div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Dealers Datatable</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Dealers DataTable</li>
                        <li class="breadcrumb-item active"><a type="button" class="btn btn-success btn-sm text-white" data-toggle="modal" data-target="#exampleModalCenter">Add Dealer</a></li>
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
                                    <th>Dealer Name</th>
                                    <th>Company</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Postal Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                       
                            <tbody>
                             @foreach($dealers as $key=>$dealer)
                             <tr>
                                 <td>{{$key=$key+1}}</td>
                                 <td>{{$dealer->first_name}} {{$dealer->last_name}}</td>
                                 <td>{{$dealer->dealer_company}}</td>
                                 <td>{{$dealer->city}}</td>
                                 <td>{{$dealer->state}}</td>
                                 <td>{{$dealer->phone}}</td>
                                 <td>{{$dealer->email}}</td>
                                 <td>{{$dealer->postal_code}}</td>
                                 <td>
                                     @if($dealer->status == 1)
                                     Active
                                     @else
                                     Block
                                     @endif
                                 </td>
                                 <td>
                                     <!--<a class="btn btn-danger" href="{{route('block_dealer',['id'=>$dealer->id])}}">Delete</a>-->
                                     <a class="btn btn-danger text-white btn-sm"   data-toggle="modal" data-target="#exampleModal">Delete</a>
                                     
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" onclick="change_password({{$dealer}})">Change Password</a>
                                     <!--@if($dealer->status == 1)-->
                                     <!--<a class="btn btn-danger" href="{{route('block_dealer',['id'=>$dealer->id])}}">Block</a>-->
                                     <!--@else-->
                                     <!--<a class="btn btn-success" href="{{route('active_dealer',['id'=>$dealer->id])}}">Active</a>-->
                                     <!--@endif-->
                                   
                                 </td>
                             </tr>
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirm You Want to Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <a type="button" class="btn btn-primary"  href="{{route('block_dealer',['id'=>$dealer->id])}}">Yes</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                             @endforeach
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="padding:40px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Dealer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-auth-small" method="POST" action="{{route('add_dealer')}}">
                                @csrf
                                 <div class="form-group">
                                    <label  class="control-label sr-only">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="" placeholder="First Name" required>
                                </div>
                                 <div class="form-group">
                                    <label  class="control-label sr-only">Last Name</label>
                                    <input type="text" class="form-control" value="" name="last_name"  placeholder="Last Name" required>
                                </div>
                                 <div class="form-group">
                                    <label  class="control-label sr-only">Phone</label>
                                    <input type="text" class="form-control" value="" name="phone"  placeholder="Phone" required>
                                </div>
                                 <div class="form-group">
                                    <label  class="control-label sr-only">City</label>
                                    <input type="text" class="form-control" value="" name="city"  placeholder="City" required>
                                </div>
                                 <div class="form-group">
                                    <label  class="control-label sr-only">Zip</label>
                                    <input type="text" class="form-control" value="" name="zip"  placeholder="Zip" required>
                                </div>
                                 <div class="form-group">
                                    <label  class="control-label sr-only">State</label>
                                    <input type="text" class="form-control" value="" name="state"  placeholder="State" required>
                                </div>
                                 <div class="form-group">
                                    <label  class="control-label sr-only">Dealer Company</label>
                                    <input type="text" class="form-control" value="" name="dealer_company" placeholder="Dealer Company" required >
                                </div>
                                <div class="form-group">
                                    <label  class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control"  value="" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" id="myInput" value="" placeholder="Password" required>
                                    <input type="checkbox" onclick="showPassword()">Show Password

                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Add Dealer</button>
                               
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>


<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <form method="POST" action="{{route('change_dealer_password')}}">
                @csrf
                
                <input id="dealer_id" id="dealer_id" hidden >
               
                <div class="mb-2">
                    <label>New Password</label><br>
                    <input placeholder="New Password" id="new_password" type="text" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Confirm Password</label><br>
                    <input placeholder="Confirm Password" id="confirm_password" type="text" class="form-control" required>
                </div>
                 <button onclick="update_password()" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
      </div>
      
    </div>
  </div>
</div>


<script>
    function showPassword() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    function change_password(dealer)
    {
        $("#dealer_id").val(dealer.id);
        $("#exampleModalCenter1").modal("show");
    }
    
    function update_password()
    {
        event.preventDefault();
        dealer_id = $('#dealer_id').val();
        new_password = $('#new_password').val();
        confirm_password = $('#confirm_password').val();

        
         $.ajax
        ({
        url: "{{route('change_dealer_password')}}",
        type: "post",
        data:{
                "_token": "{{ csrf_token() }}",
                'dealer_id':dealer_id,
                'new_password':new_password,
                'confirm_password':confirm_password,
                
            },
             success: function (response) {
            console.log(response);
            if(response == 1)
            {
                toastr.success('Password Updated Successfully', 'Success!');
                 $("#exampleModalCenter1").modal("hide");
            }
            if(response == 0)
            {
                toastr.error('Password Confirmation mismatch', 'Error');
            }
             
   
            },
            error: function(jqXHR, textStatus, errorThrown) {
              toastr.success('Something went Wrong', 'Error');
            }
            });
    }
</script>
@endsection
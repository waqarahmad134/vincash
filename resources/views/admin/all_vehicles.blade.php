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
                <h2>Vehicle Datatable</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Vehicle DataTable</li>
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
                                <!--<th>Est. Price</th>-->
                                <th>Offer Price</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                            @foreach($vehicles as $key=>$vec)
                            <tr>
                               
                                <td>{{$vec->id}}</td>
                                <td>{{$vec->vin_number}}</td>
                                <td>{{$vec->vehicle_type}}</td>
                                <td>{{$vec->year}}</td>
                                <td>{{$vec->make}} </td>
                                <td>{{$vec->model}}</td>
                                <td>{{$vec->km}}</td>
                                <td>{{$vec->user->city ?? " " }}</td>
                                <td>{{$vec->postal_code}}</td>
                                <!--<td><span id="est{{$vec->id}}">{{$vec->est_price}}</span></td>-->
                                <td><span id="demand{{$vec->id}}">{{$vec->demand_price}}</span></td>
                                <td>
                                    @if($vec->status == 1)
                                    Active
                                    @else
                                    Block
                                    @endif
                                </td>
                                <td>{{$vec->created_at->format('d M Y')}}</td>
                                <td>
                                    <!--<a class="btn btn-danger" href="{{route('block_vec',['id'=>$vec->id])}}">Delete</a>-->
                                    <a class="btn btn-danger text-white"   data-toggle="modal" data-target="#exampleModal">Delete</a>
                                    <!--  @if($vec->status == 1)-->
                                    <!--<a class="btn btn-danger" href="{{route('block_vec',['id'=>$vec->id])}}">Delete</a>-->
                                    <!--@else-->
                                    <!-- <a class="btn btn-warning" href="{{route('active_vec',['id'=>$vec->id])}}">Active</a>-->
                                    <!--@endif-->
                                    <a class="btn btn-secondary text-white" onclick="add_price({{$vec}})" >Add Price</a>
                                    <a class="btn btn-primary" href="{{route('admin.veh_details',['id'=>$vec->id])}}">View Details</a>
                                    <a class="btn btn-success text-white" onclick="dealers({{$vec}})">Dealers</a>
                                
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
                                    <a type="button" class="btn btn-primary" href="{{route('block_vec',['id'=>$vec->id])}}">Yes</a>
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



<!-- Modal -->
<div class="modal fade" id="dealers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <form method="POST" action="{{route('assign_dealer')}}">
          @csrf
    <div class="modal-content" style="padding:40px">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Assign Dealers</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <h4>VIN NUMBER : <span id="vec_number"></span></h4>
           <input name="vec_id" id="vec_id" hidden>
        </div>
        <label><input type="checkbox" id="select-all" />&nbsp; <span style="color:blue;font-size:18px"> Choose all </span></label>
        <div class="row">
            @foreach($dealers as $key=>$dealer)
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-check mb-2">
                        <input name="dealers[]" dealer_id="{{$dealer->id}}" value="{{$dealer->id}}" class="form-check-input dealer_checkbox" type="checkbox"  id="dealer_checkbox">
                        <label class="form-check-label" for="flexCheckDefault">
                           {{$dealer->first_name}} {{$dealer->last_name}}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button onclick="assign_dealer()" class="btn btn-primary">Save</button>
        </div>
    </div>
    </form>
  </div>
</div>






<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="padding:40px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Prices</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="{{route('add_price')}}">
           @csrf
           <input id="vehicle_id" name="vec_id" hidden>
            <div class="form-group">
                <label for="signin-email" class="control-label">Est. Price</label>
                <input type="text" class="form-control" id="est_price" value="" name="est_price" required placeholder="Est. Price">
            </div>
             <div class="form-group">
                <label for="signin-email" class="control-label">Demand Price</label>
                <input type="text" class="form-control" id="demand_price" value="" name="demand_price" required placeholder="Demand Price">
            </div>
             <button onclick="update_price()" class="btn btn-primary btn-lg btn-block">Add Price</button>
       </form>
      </div>
     
    </div>
  </div>
</div>

<script>

    function assign_dealer()
    {
        event.preventDefault();
        vec_id = $("#vec_id").val();
        
         const arr = [];
        //   $('.dealer_checkbox:checked').each(function(i){
        //   arr[i] = $(this).val();
        // });
        
        // console.log(arr);
        // return false;
       
        $('.dealer_checkbox:checked').each(function() {
           arr.push($(this).val());
        });
        
       
        $.ajax
        ({
        url: "{{route('assign_dealer')}}",
        type: "post",
        data:{
                "_token": "{{ csrf_token() }}",
                'vec_id':vec_id,
                'arr':arr,
            },
             success: function (response) {
            console.log(response);
            if(response == 1)
            {
                 toastr.success('Dealer assign successfully!', 'Congrats');
                 $('#dealers').modal('hide');
            }
            },
            
           
            error: function(jqXHR, textStatus, errorThrown) {
              toastr.error('Something went Wrong', 'Error');
            }
            });
        
    }

    function add_price(vec)
    {
        
        $('#vehicle_id').val(vec.id);
        $('#est_price').val(vec.est_price);
        $('#demand_price').val(vec.demand_price);
        $('#exampleModalCenter').modal('show');

    }
    
    function update_price()
    {
        event.preventDefault();
        vec_id = $('#vehicle_id').val();
        est_price = $('#est_price').val();
        demand_price = $('#demand_price').val();
        
         $.ajax
        ({
        url: "{{route('add_price')}}",
        type: "post",
        data:{
                "_token": "{{ csrf_token() }}",
                'vec_id':vec_id,
                'est_price':est_price,
                'demand_price':demand_price,
                
            },
             success: function (response) {
            console.log(response);
            $("#est"+response.id).html(response.est_price);
            $("#demand"+response.id).html(response.demand_price);
             $('#exampleModalCenter').modal('hide');
             toastr.success('Price Updated Successfully', 'Info');
   
            },
            error: function(jqXHR, textStatus, errorThrown) {
              toastr.success('Something went Wrong', 'Error');
            }
            });
    }
    
    function dealers(vec)
    {
        $("#vec_number").html(vec.vin_number);
        $("#vec_id").val(vec.id);
        vec_id = vec.id;
        $('#dealers').modal('show');
        
        var inputs = document.querySelectorAll('.form-check-input');   
        for (var i = 0; i < inputs.length; i++) {   
            inputs[i].checked = false;   
        }   
        
        $.ajax
    ({
    url: "{{route('get_dealers')}}",
    type: "post",
    data:{
            "_token": "{{ csrf_token() }}",
            'vec_id':vec_id,
            
        },
         success: function (response) {
        console.log(response);
        for(var k=0; k<response.length; k++)
        {
             var inputs = document.querySelectorAll('.form-check-input');   
                for (var i = 0; i < inputs.length; i++) { 
                    if(inputs[i].value == response[k].dealer_id)
                    {
                         inputs[i].checked = true; 
                    }
                     
                }
   
        }
        
        // if(response.dealer_id== 1)
        //         {
        //             $('#dealer_checkbox').prop('checked', true);
        //         }
        
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
          toastr.success('Something went Wrong', 'Error');
        }
        });
    }

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
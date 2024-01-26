@extends('admin.welcome')
@section('content')

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
                                    <th>Serial No</th>
                                    <th>Vin Number</th>
                                    <th>Vehicle Type</th>
                                    <th>Vehicle Make</th>
                                    <th>Model</th>
                                    <th>Year</th>
                                    <th>KMs</th>
                                    <th>Postal Code</th>
                                    <th>Est. Price</th>
                                    <th>Demand Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                       
                            <tbody>
                                @foreach($vehicles as $key=>$vec)
                                <tr>
                                    <td>{{$key = $key+1}}</td>
                                    <td>{{$vec->vin_number}}</td>
                                    <td>{{$vec->vehicle_type}}</td>
                                    <td>{{$vec->make}}</td>
                                    <td>{{$vec->model}}</td>
                                    <td>{{$vec->year}}</td>
                                    <td>{{$vec->km}}</td>
                                    <td>{{$vec->postal_code}}</td>
                                    <td>{{$vec->est_price}}</td>
                                    <td>{{$vec->demand_price}}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{route('delete_vehicle',['id'=>$vec->id])}}">Delete</a>
                                      <a class="btn btn-success" onclick="open_modal({{$vec}})">Buy</a>
                                      <a class="btn btn-info" data-toggle="modal" data-target="#memo">Memo</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- MEOO MODAL -->
<div class="modal fade" id="memo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Send Memo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{route('send_memo')}}">
                 @csrf
      <div class="modal-body">
                  
                  <div>
                      <label>Message</label>
                     <textarea class="form-control" name="message"></textarea>
                  </div>
                 
                 
                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send Memo</button>
         </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="dealers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="padding:40px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Card Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div>
              <form>
                  <input type="hidden" id="vec_id" >
                  <div class="mb-2">
                      <label>Select Payment Method</label>
                      <select class="form-control payment_method" name="payment_method">
                          <option>Select Payment method</option>
                          <option value="EFT">EFT</option>
                          <option value="Credit Card">Credit Card</option>
                          <option value="E-Transfer">E-Transfer</option>
                      </select>
                  </div>
                 
                  <button onclick="buy_vehicle()" class="btn btn-primary float-right">Buy Vehicle</button>
                  </form>
            
          </div>
      </div>
    </div>
    </form>
  </div>
</div>






<!-- Modal -->


<script>
    function open_modal(vec)
    {
       
        $("#vec_id").val(vec.id);
        $('#dealers').modal('show');

    }
    
    function buy_vehicle()
    {
        
        event.preventDefault();
        payment_method = $(".payment_method option").filter(":selected").val();
        vec_id = $("#vec_id").val();
        
        
        $.ajax
        ({
        url: "{{route('buy_vehicle')}}",
        type: "post",
        data:{
                "_token": "{{ csrf_token() }}",
                'vec_id':vec_id,
                'payment_method':payment_method,
               
            },
             success: function (response) {
            console.log(response);
         
            $('#dealers').modal('hide');
            
            if(response.status == "sold")
            {
                toastr.error('Already Buy this vehicle', 'Oppps!');
            }
            if(response.status == "ok")
            {
                location.reload();
                toastr.success('You buy this vehicle', 'Congrats!');
            }

            },
            error: function(jqXHR, textStatus, errorThrown) {
              toastr.error('Something went Wrong', 'Error');
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
</script>
@endsection
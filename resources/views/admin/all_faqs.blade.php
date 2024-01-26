@extends('admin.welcome')
@section('content')

<div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>All FAQS Datatable</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">FAQS DataTable</li>
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
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                       
                            <tbody>
                              @foreach($faqs as $key=>$faq)
                              <tr>
                                  <td>{{$key=$key+1}}</td>
                                  <td>{{ Str::limit($faq->question, 70) }}</td>
                                  <td>{{ Str::limit($faq->answer, 70) }}</td>
                                  <td><a href="{{route('delete_faq',['id'=>$faq->id])}}" class="btn btn-danger btn-sm text-white">Delete</a></td>
                              </tr>
                              @endforeach
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
           <input id="vec_id" name="vec_id" hidden>
             <div class="form-group">
                <label for="signin-email" class="control-label sr-only">Est. Price</label>
                <input type="text" class="form-control" id="signin-email" value="" name="est_price" required placeholder="Est. Price">
            </div>
             <div class="form-group">
                <label for="signin-email" class="control-label sr-only">Demand Price</label>
                <input type="text" class="form-control" id="signin-email" value="" name="demand_price" required placeholder="Demand Price">
            </div>
             <button type="submit" class="btn btn-primary btn-lg btn-block">Add Price</button>
           
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection
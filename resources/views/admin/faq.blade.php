@extends('admin.welcome')
@section('content')

<div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Page Blank</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h1>FAQ's</h1>
                        </div>
                        <form method="POST">
                            @csrf
                        <div class="body">
                            <div class="form-group">
                                <label>First FAQ</label>
                                <input name="question" type="text" class="form-control mb-2" required placeholder="Question...">
                                <textarea name="answer" type="text" class="form-control" required placeholder=""></textarea>
                            </div> 
                            <button class="btn btn-info float-right mb-2">Submit</button>
                        </div>
                        </form>
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
                         <h4>All FAQ's</h4>
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
                                  <td>{{ Str::limit($faq->question) }}</td>
                                  <td style="white-space:normal;" >{{ $faq->answer}}</td>
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
    </div>

@endsection
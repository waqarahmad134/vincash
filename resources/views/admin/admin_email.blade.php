@extends('admin.welcome')
@section('content')

<div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Admin Email</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix justify-contect-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card p-3">
                        <?php
                        $email = App\Models\User::where('user_type','admin')->first();
                        
                        ?>
                        <form method="POST" action="{{route('admin_email_post')}}">
                            @csrf
                            <div class="mb-2">
                                <label>Admin Email</label><br>
                                <input value="{{App\Models\AdminEmail::latest()->first()->admin_email ?? "Add Email"}}" name="email" type="text" class="form-control" required>
                            </div>
                             <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
             
            </div>
        </div>
      
     
        </div>
  

@endsection
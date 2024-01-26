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
                        <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card p-3">
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
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card p-3">
                        <div>
                            <label>New Email</label><br>
                            <input class="form-control" type="text" id="new_email">
                        </div>
                        <div class="mt-3">
                            <label> Confirm New Email</label><br>
                            <input class="form-control" type="text" id="c_new_email">
                        </div>    
                        <button onclick="change_email()" class="btn btn-info float-right m-3">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>Logo</h2>
                        </div>
                        <form method="POST" action="{{route('logo')}}" enctype='multipart/form-data'>
                            @csrf
                        <div class="body">
                            <input class="dropify" type="file" name="logo">
                        </div>
                        <button class="btn btn-info float-right m-3">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>Logo (Footer)</h2>
                        </div>
                        <form method="POST" action="{{route('footer_logo')}}" enctype='multipart/form-data'>
                            @csrf
                        <div class="body">
                            <input class="dropify" type="file" name="logo">
                        </div>
                        <button class="btn btn-info float-right m-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="container-fluid">           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>Home Page Title</h2>
                        </div>
                        <form method="POST" action="{{route('title')}}">
                            @csrf
                            <div class="body">
                                <textarea class="summernote summer" name="title">{{App\Models\Setting::where('title','title')->first()->description}}</textarea>
                            </div>
                            <button class="btn btn-info float-right m-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>Phone Number</h2>
                        </div>
                        <form method="POST" action="{{route('phone_post')}}">
                            @csrf
                            <div class="body">
                                <textarea class="summernote summer" name="title">{{App\Models\Setting::where('title','phone')->first()->description}}</textarea>
                            </div>
                            <button class="btn btn-info float-right m-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>About Us (Footer)</h2>
                        </div>
                        <form method="POST" action="{{route('about_us_footer')}}">
                            @csrf
                            <div class="body">
                                <textarea class="summernote summer" name="about_us">@if(App\Models\Setting::where('title','about_us_footer')->first()){{App\Models\Setting::where('title','about_us_footer')->first()->description}} @endif</textarea>
                            </div>
                            <button class="btn btn-info float-right m-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>About Us (Front Site)</h2>
                        </div>
                        <form method="POST" action="{{route('about_us')}}">
                            @csrf
                            <div class="body">
                                <textarea class="summernote summer" name="about_us">{{App\Models\Setting::where('title','about_us')->first()->description}}</textarea>
                            </div>
                            <button class="btn btn-info float-right m-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>Footer Text</h2>
                        </div>
                        <form method="POST" action="{{route('footer')}}">
                            @csrf
                            <div class="body">
                                <textarea class="summernote summer" name="footer">{{App\Models\Setting::where('title','footer')->first()->description}}</textarea>
                            </div>
                            <button class="btn btn-info float-right m-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
       
        </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
   <script>
       
    function change_email()
    {
        event.preventDefault();
        new_email = $('#new_email').val();
        c_new_email = $('#c_new_email').val();
        
        if(new_email == '')
        {
             toastr.error('New Email is Required', 'Error');
             return false;
        }
        if(c_new_email == '')
        {
             toastr.error('Confirm Email is Required', 'Error');
             return false;
        }
        
        if(new_email != c_new_email)
        {
            toastr.error('Mismatch', 'Error');
            return false;
        }

         $.ajax
        ({
                url: "{{route('change_email')}}",
                type: "post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    'new_email':new_email,
                    'c_new_email':c_new_email,
                    
                },
                success: function (response) {
                console.log(response);
                if(response == true)
                {
                    toastr.success('Email Change', 'Congrats');
                }
                if(response == false)
                {
                    toastr.error('Something went wrong', 'Error');
                }
               
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  toastr.error('Something went Wrong', 'Error');
                }
        });
    }
   </script>    

@endsection
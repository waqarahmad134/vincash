<!doctype html>
<html lang="en">

<head>
<title>Forgot Password Admin</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Vincash Admin Dashboard">
<meta name="author" content="vincash, www.vincash.co">
<link rel="icon" href="{{asset('public/assets/images/logo.png')}}" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/color_skins.css')}}">
</head>


<body class="theme-orange">
    <!-- WRAPPER -->
    <div id="wrapper" class="auth-main">
        <div class="container">
            
            <div class="row clearfix">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                       
                    </nav>                    
                </div>
                <div class="col-lg-8">
                    <div class="auth_detail">
                        <img class="img-fluid" src="{{asset('public/assets/images/logo/VinCash_original.png')}}" alt="logo" >
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card">
                        <div class="header">
                            <p class="lead">Recover my password</p>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger mx-3" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                         @endif
                        <div class="body">
                            <p>Please Enter New Password</p>
                            <form method="POST" class="form-auth-small" action="{{route('reset_password_post')}}">
                                @csrf
                                <div class="form-group">                                    
                                    <input type="hidden" class="form-control" value="" name="token" id="tokenInput">
                                    <input type="text" class="form-control" name="new_password" >
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
  
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
 <script>
        var currentUrl = window.location.href;
        var token = currentUrl.split('reset_password/')[1];
        document.getElementById("tokenInput").value = token;
    </script>
  <script>
  
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.message("{{ session('message') }}");
        @endif
      
        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{!! session('error') !!}");
        @endif
      
        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif
      
        // @if(Session::has('warning'))
        // toastr.options =
        // {
        //     "closeButton" : true,
        //     "progressBar" : true
        // }
        //         toastr.warning("{{ session('warning') }}");
        // @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right"
        }
                toastr.warning("{{ session('warning') }}");
        @endif
        
    </script> 
</body>
</html>

@extends('admin.welcome')
@section('content')


<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Add Dealers</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Add Dealers</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8 " style="margin:auto;padding:40px;">
            <div class="card">
                <div class="header text-center">
                    <h1 class="">Add Dealers</h1>
                    <ul class="header-dropdown dropdown dropdown-animated scale-left">
                        <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                    </ul>
                </div>
                <div class="body" style="padding:50px">
                     <form class="form-auth-small" method="POST" action="{{route('add_dealer')}}">
                        @csrf
                         <div class="form-group">
                            <label class="control-label sr-only">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="" required placeholder="First Name">
                        </div>
                         <div class="form-group">
                            <label class="control-label sr-only">Last Name</label>
                            <input type="text" class="form-control" value="" name="last_name" required placeholder="Last Name">
                        </div>
                        
                         <div class="form-group">
                            <label class="control-label sr-only">Phone</label>
                            <input type="text" class="form-control" value="" name="phone" required placeholder="Phone">
                        </div>
                         <div class="form-group">
                            <label class="control-label sr-only">City</label>
                            <input type="text" class="form-control" value="" name="city" required placeholder="City">
                        </div>
                         <div class="form-group">
                            <label class="control-label sr-only">Zip</label>
                            <input type="text" class="form-control" value="" name="zip" required placeholder="Zip">
                        </div>
                         <div class="form-group">
                            <label class="control-label sr-only">State</label>
                            <input type="text" class="form-control" value="" name="state" required placeholder="State">
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label sr-only">Dealer Company</label>
                            <input type="text" class="form-control" value="" name="dealer_company" required placeholder="Dealer Company">
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label sr-only">Email</label>
                            <input type="email" name="email" class="form-control" required value="user@domain.com" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" name="password" class="form-control" id="signin-password" required value="" placeholder="Password">
                                                                <input type="checkbox" onclick="showPassword()">Show Password
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" >Add Dealer</button>
                    </form>
                </div>
            </div>
        </div>
</div>

<script>
  function showPassword() {
      var x = document.getElementById("signin-password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>

@endsection
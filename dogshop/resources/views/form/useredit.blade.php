@extends('master')

@section('content')
<!-- Page title -->
<div class="page-title">
    <div class="container">
        <h2><i class="fa fa-paw color"></i> My Account</h2>
        <hr>

    </div>
</div>
<!-- Page content -->
<div class="account-content">
    <div class="container">

         <div class="row">

            @include('inc.userMenu')
                   <div class="col-md-9">
                  <h3><i class="fa fa-user color"></i> &nbsp;Edit Profile</h3>
                  <!-- Your details -->
                  <form role="form"  class="form-horizontal" action="{{url('user/changeUser')}}" method="POST">
                   {{ csrf_field() }} 
                    <div class="form-group">
                      <label for="name" class="col-md-2 control-label">Name</label>
                      <div class="col-md-4">
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="inputName" placeholder="Full Name">
                      </div>
                    </div>            
                    <div class="form-group">
                      <label for="email" class="col-md-2 control-label">Email</label>
                      <div class="col-md-4">
                      <input type="text" name="email" value="{{ $user->email }}" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="phone" class="col-md-2 control-label">Phone</label>
                      <div class="col-md-4">
                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" id="inputPhone" placeholder="Phone Number">
                      </div>
                    </div>            
                    <div class="form-group">
                        <label for="address" class="col-md-2 control-label">Address</label>
                        <div class="col-md-4">
                            <textarea name="address" class="form-control" id="inputTitle" placeholder="Address" rows="3">{{ $user->address }}</textarea>                        </div>
                    </div>                
                    <hr />
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Save Changes"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('user/user')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                  </form>      
            </div>
        </div>

        
    </div>
</div>

@endsection
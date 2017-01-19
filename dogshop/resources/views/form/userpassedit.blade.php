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
                  <h3><i class="fa fa-user color"></i> &nbsp;Change Password</h3>
                  <!-- Your details -->
                  <form role="form"  class="form-horizontal" action="{{url('user/changeUser')}}" method="POST">
                   {{ csrf_field() }} 
                   <input type="hidden" name="check" class="form-control" value="{{ Session::get('user_id') }}">
                    <div class="form-group">
                      <label for="oldPassword" class="col-md-3 control-label">Old Password:</label>
                      <div class="col-md-4">
                      <input type="password" name="oldPassword" class="form-control" id="inputOldPassword" placeholder="Old Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-md-3 control-label">New Password</label>
                      <div class="col-md-4">
                        <input type="password" name="password" class="form-control" id="inputNewPassword" placeholder="New Password">
                      </div>
                    </div>            
                    <div class="form-group">
                        <label for="password_confirmation" class="col-md-3 control-label">Confirm New Password</label>
                        <div class="col-md-4">
                        <input type="password" name="password_confirmation" class="form-control" id="inputConfirmNewPassword" placeholder="Confirm Password">
                        </div>                     
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <hr>
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
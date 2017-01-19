@extends('master')

@section('content')

<div class="blocky">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="reg-login-info">
                    <h2>Sign in to Access Amazing Benefits <span class="color">!!!</span></h2>
                    <img src="{{asset('img/pages/back2.jpg')}}" alt="" class="img-responsive img-thumbnail" />
                    <p>Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-login">
                    <div class="cool-block">
                        <div class="cool-block-bor">

                            <h3>Sign In</h3>
                            <form class="form-horizontal" action="" method="POST">
                                {{ csrf_field() }}
                                
                                <input type="hidden" name="destionation" value="{{ $destination }}" >
                                <div class="form-group">
                                    <label for="email" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Password">
                                    </div> 
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input type="submit" name="submit" class="btn btn-info" value="Sign In">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <strong>Still not a member? <a href="{{url('user/signup')}}">Sign up now!</a></strong>
                </div>
            </div>
        </div>
        <div class="sep-bor"></div>
    </div>
</div>



@endsection
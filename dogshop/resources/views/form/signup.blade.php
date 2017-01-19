@extends('master')

@section('content')

<div class="blocky">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="reg-login-info">
                    <h2>Sign up for the best shops for your dog <span class="color">!!!</span></h2>
                    <img src="{{asset('img/pages/back1.jpg')}}" alt="" class="img-responsive img-thumbnail" />
                    <p>Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-login">
                    <div class="cool-block">
                        <div class="cool-block-bor">

                            <h3>Sign Up</h3>
                            <form class="form-horizontal" action="" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
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
                                <div class="form-group">
                                    <label for="password_confirmation" class="col-lg-2 control-label">Confirm Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" name="password_confirmation" class="form-control" id="inputPassword1" placeholder="Confirm Password">
                                    </div> 
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="phone" class="col-lg-2 control-label">Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="inputPhone" placeholder="Phone Number">
                                    </div> 
                                </div> 
                                <div class="form-group">
                                    <label for="address" class="col-lg-2 control-label">Address (optional)</label>
                                    <div class="col-lg-10">
                                        <textarea  name="address" rows="2" class="form-control" id="inputAddress" placeholder="Full Address">{{ old('address') }}</textarea>
                                    </div> 

                                </div> 
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input type="submit" name="submit" class="btn btn-info" value="Sign Up">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="sep-bor"></div>
    </div>
</div>



@endsection
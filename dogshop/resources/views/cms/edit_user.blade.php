@extends('cms.master')

@section('cms_content')

@if ( $user->roll_id == 4 )
<h1 class="page-header"><a href="{{url('cms/users')}}">Users & Admin</a> >> Make Admin</h1>
<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
           
            <div class="cool-block-bor">
                                <h3 class="hero">Are you sure you want to change this user to admin?</h3>
                                <h4 class="hero"> This user will get the same permissions as you have.</h4>
                
                <form class="form-horizontal" action="{{url('cms/users/'.$user->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="roll_id" value="{{ $user->roll_id }}">
                    <div class="form-group">
                        <div class="form-group ">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-danger" value="Yes, make this user admin"> &nbsp &nbsp
                                        <a class="btn btn-info" href="{{url('cms/users')}}"> Cancel </a>
                                        </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

@endif

@if ( $user->roll_id == 3 )
<h1 class="page-header"><a href="{{url('cms/users')}}">Users & Admin</a> >> Cancel Admin</h1>
<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">
                                <h3 class="hero">Are you sure you want to change this admin back to a user?</h3>
                                <h4 class="hero"> This admin will be a user, and he will lose his permissions.</h4>
                <form class="form-horizontal" action="{{url('cms/users/'.$user->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="roll_id" value="{{ $user->roll_id }}">
                    <div class="form-group">
                        <div class="form-group ">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-danger" value="Yes, change this admin back to user"> &nbsp &nbsp
                                        <a class="btn btn-info" href="{{url('cms/users')}}"> Cancel </a>
                            </div>
                        </div>
                </form>
                    </div>
            </div>
        </div>
    </div>
</div>
        
@endif

@endsection


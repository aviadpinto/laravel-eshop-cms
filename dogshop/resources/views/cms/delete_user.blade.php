@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/users')}}">Users & Admin</a> >> Delete User</h1>
<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">

                <h3 class="hero">Are you sure you want to delete this user?</h3>
                <h4> His account will be  deleted. <br> However, if he ordered from your store, his order will stay in the orders managing page . </h4>
                <form class="form-horizontal" action="{{url('cms/users/'. $id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <div class="form-group ">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-danger" value="Yes, Delete this user"> &nbsp &nbsp
                                <a class="btn btn-info" href="{{url('cms/users')}}"> Cancel </a>
                            </div>
                        </div>
                </form>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection


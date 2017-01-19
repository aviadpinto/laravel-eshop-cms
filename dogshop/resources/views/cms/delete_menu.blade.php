@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/menu')}}">Menu</a> >> Delete Page</h1>

<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">

                <h3 class="hero">Are you sure you want to delete this page?</h3>

                <form class="form-horizontal" action="{{url('cms/menu/'. $id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <div class="form-group ">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-danger" value="Yes, Delete this page"> &nbsp &nbsp
                                <a class="btn btn-info" href="{{url('cms/menu')}}"> Cancel </a>
                            </div>
                        </div>
                </form>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection


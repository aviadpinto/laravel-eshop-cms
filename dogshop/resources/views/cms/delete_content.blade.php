@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/menu')}}">Contents</a> >> Delete Content</h1>

<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">

                <h3 class="hero">Are you sure you want to delete this content?</h3>

                <form class="form-horizontal" action="{{url('cms/content/'. $id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <div class="form-group ">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-danger" value="Yes, Delete this page"> &nbsp &nbsp
                                <a class="btn btn-info" href="{{url('cms/content')}}"> Cancel </a>
                            </div>
                        </div>
                </form>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection


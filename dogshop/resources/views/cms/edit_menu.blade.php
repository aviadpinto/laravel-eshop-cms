@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/menu')}}">Menu</a> >> Edit Page Details</h1>

<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">

                <h3>Edit page in the menu</h3>
                <form class="form-horizontal" action="{{url('cms/menu/'.$menu['id'])}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" value="{{$menu['id']}}">
                    
                    <div class="form-group">
                        <label for="link" class="col-lg-2 control-label">Link</label>
                        <div class="col-lg-10">
                            <input type="text" name="link" value="{{ $menu['link'] }}" class="form-control original-text-input" id="inputLink" placeholder="Page link">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" value="{{ $menu['title'] }}" class="form-control" id="inputTitle" placeholder="Page title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">Url</label>
                        <div class="col-lg-10">
                            <input type="text" name="url" value="{{ $menu['url'] }}" class="form-control target-text-input" id="inputUrl" placeholder="www.yoursite.com/**URL**"> 
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Update Page"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('cms/menu')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


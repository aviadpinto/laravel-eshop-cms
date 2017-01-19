@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/categories')}}">Categories</a> >> Add Category</h1>

<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">
                <h3>Adding new category to the shop</h3>
                <form class="form-horizontal" action="{{url('cms/categories')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control original-text-input" id="inputTitle" placeholder="Category title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <input type="text" name="article" value="{{ old('article') }}" class="form-control" id="inputArticle" placeholder="Short description">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="image" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <input type="file" name="image" class="form-control" id="inputImage">
                        </div>
                    </div>      
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">Url</label>
                        <div class="col-lg-10">
                            <input type="text" name="url" value="{{ old('url') }}" class="form-control target-text-input" id="inputUrl" placeholder="www.yoursite.com/shop/**URL**"> 
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Add Category"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('cms/categories')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


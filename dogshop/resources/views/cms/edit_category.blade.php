@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/categories')}}">Categories</a> >> Edit Category Details</h1>

<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">

                <h3>Edit Category in the shop</h3>
                <form class="form-horizontal" action="{{url('cms/categories/'.$category['id'])}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" value="{{$category['id']}}">

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" value="{{$category['title'] }}" class="form-control original-text-input" id="inputTitle" placeholder="Category title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <input type="text" name="article" value="{{ $category['article'] }}" class="form-control" id="inputArticle" placeholder="Short description">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="image" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <img src="{{asset('img/categories/'. $category['image'])}}" width="70" border="0" class="img-responsive pull-left"><br>
                            <div class="pull-left"><span style="font-size: 9pt;"> &nbsp You can change the current image:</span></div>
                            <input type="file" name="image" class="form-control pull-left" id="inputImage">
                        </div>
                    </div>      
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">Url</label>
                        <div class="col-lg-10">
                            <input type="text" name="url" value="{{ $category['url'] }}" class="form-control target-text-input" id="inputUrl" placeholder="www.yoursite.com/shop/**URL**"> 
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Update Category"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('cms/categories')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


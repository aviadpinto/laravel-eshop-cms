@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/products')}}">Products</a> >> Add Product</h1>

<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">
                <h3>Adding new product to the shop</h3>
                <form class="form-horizontal" action="{{url('cms/products')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}        
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control original-text-input" id="inputTitle" placeholder="Product title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-lg-2 control-label">Category</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="category" id="InputCategory">
                                <option value="">Choose Category:</option>
                                @foreach ($categories as $row)
                                <option value="{{ $row['id'] }}">{{ $row['title'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">Url</label>
                        <div class="col-lg-10">
                            <input type="text" name="url" value="{{ old('url') }}" class="form-control target-text-input" id="inputUrl" placeholder="www.yoursite.com/shop/category/**URL**"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control" id="inputPrice" placeholder="Price">
                        </div>
                    </div>           
                    <div class="form-group">
                        <label for="shortText" class="col-lg-2 control-label">short</label>
                        <div class="col-lg-10">
                            <input type="text" name="shortText" value="{{ old('shortText') }}" class="form-control" id="inputAbout" placeholder="Short description about the item">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea name="description" class="form-control"  id="summernote"  style="width:900px"> {{ old('description') }} </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <input type="file" name="image" class="form-control" id="inputImage">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Save Product"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('cms/products')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/products')}}">Product</a> >> Edit Product Details</h1>

<div class="col-md-6">
    <div class="register-login">
        <div class="cool-block">
            <div class="cool-block-bor">
                <h3>Edit Product in the shop</h3>
                <form class="form-horizontal" action="{{url('cms/products/'.$product['id'])}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" value="{{$product['id']}}">

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" value="{{ $product['title'] }}" class="form-control original-text-input" id="inputTitle" placeholder="Category title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-lg-2 control-label">Category</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="category" id="InputCategory">
                                @foreach ($category as $row)
                                <option value="{{ $row->id }}">{{ $row->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">Url</label>
                        <div class="col-lg-10">
                            <input type="text" name="url" value="{{ $product['url'] }}" class="form-control target-text-input" id="inputUrl" placeholder="www.yoursite.com/shop/category/**URL**"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="text" name="price" value="{{ $product['price'] }}" class="form-control" id="inputPrice" placeholder="Price">
                        </div>
                    </div>           
                    <div class="form-group">
                        <label for="shortText" class="col-lg-2 control-label">short</label>
                        <div class="col-lg-10">
                            <input type="text" name="shortText" value="{{ $product['shortText'] }}" class="form-control" id="inputAbout" placeholder="Short description about the item">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea name="description" class="form-control"  id="summernote"  style="width:900px"> {{ $product['description'] }} </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <img src="{{asset('img/products/'. $product['image'])}}" width="70" border="0" class="img-responsive pull-left"><br>
                            <div class="pull-left"><span style="font-size: 9pt;"> &nbsp You can change the current image:</span></div>
                            <input type="file" name="image" class="form-control pull-left" id="inputImage">
                        </div>
                    </div>      
                    <br>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Update Product"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('cms/products')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


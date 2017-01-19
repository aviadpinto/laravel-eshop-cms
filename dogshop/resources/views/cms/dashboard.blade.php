@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Dashboard</h1>


<br>
<div class="row">
    <a href="{{ url('cms/users') }}">
    <div class="col-sm-6 cms_menu">
        <img src="{{asset('img/cms/users.png')}}" class="img-responsive center-block cms_menu_img">
        <h3 class="text-center"> Manage Users </h3>
    </div>
    </a>
    
    <a href="{{ url('cms/categories') }}">
    <div class="col-sm-6 cms_menu">
        <img src="{{asset('img/cms/categories.png')}}" class="img-responsive center-block cms_menu_img">
        <h3 class="text-center"> Manage Categories </h3>
    </div>

</div>
<br>
<div class="row">
    <a href="{{ url('cms/menu') }}">
    <div class="col-sm-6 cms_menu">
        <img src="{{asset('img/cms/menu.png')}}" class="img-responsive center-block cms_menu_img">
        <h3 class="text-center"> Manage Menu </h3>
    </div>
    </a>
    
    <a href="{{ url('cms/products') }}">
    <div class="col-sm-6 cms_menu">
        <img src="{{asset('img/cms/products.png')}}" class="img-responsive center-block cms_menu_img">
        <h3 class="text-center"> Manage Products </h3>
    </div>
    </a>
</div>
<br>
<div class="row">
<a href="{{ url('cms/content') }}">
    <div class="col-sm-6 cms_menu">
        <img src="{{asset('img/cms/contents.png')}}" class="img-responsive center-block cms_menu_img">
        <h3 class="text-center"> Manage Content </h3>
    </div>
</a>
    
    <a href="{{ url('cms/orders') }}">
    <div class="col-sm-6 cms_menu">
        <img src="{{asset('img/cms/cart.png')}}" class="img-responsive center-block cms_menu_img">
        <h3 class="text-center"> Manage Orders </h3>
    </div>
    </a>
</div>


@endsection


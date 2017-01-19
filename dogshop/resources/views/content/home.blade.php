@extends('master')

@section('content')

<!-- Carousel starts -->
<div id="carousel-example-generic" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <!-- Item -->
        <div class="item active animated fadeInRight">
            <img src="{{ asset('img/slider/slider1.jpg') }}" alt="" class="img-responsive" />
            <div class="carousel-caption">
                <h2 class="animated fadeInLeftBig">Happy dog is a Calm dog</h2>
                <p class="animated fadeInRightBig">We have a lot of products, <strong>to make your dog happy and calm. </strong> <br> Check what we have got now! </p>
                <a href="{{ url('shop') }}" class="animated fadeInLeftBig btn btn-info btn-lg">Go Shop</a>
            </div>
        </div>

        <div class="item animated fadeInRight">
            <img src="{{ asset('img/slider/slider2.jpg') }}" alt="" class="img-responsive" />
            <div class="carousel-caption">
                <h2 class="animated fadeInLeftBig">New items every day !</h2>
                <p class="animated fadeInRightBig"><strong>We're doing the best for the dogs! </strong> <br> Not a member?</p>
                <a href="{{ url('user/signup') }}" class="animated fadeInLeftBig btn btn-info btn-lg">Sign up now!</a>
            </div>
        </div>

        <div class="item animated fadeInRight">
            <img src="{{ asset('img/slider/slider3.jpg') }}" alt="" class="img-responsive" />
            <div class="carousel-caption">
                <h2 class="animated fadeInLeftBig">Looking for harnesses?</h2>
                <p class="animated fadeInRightBig"> <strong>We have got what you need!</strong><br>
                    New brands, with the best prices! </p>
                <a href="{{ url('shop/harnesses') }}" class="animated fadeInLeftBig btn btn-info btn-lg">Go Shop</a>
            </div>
        </div>          
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>

<!-- carousel ends -->

<!-- Hero starts -->
<div class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Catchy title -->
                <h3>YOUR DOG  <span class="color">DESERVES</span> MORE!</h3>
                <p>The happiest dogs starts in DOGSHOP! <br>We have a quick service, to make sure you will be satisfied! </p>
            </div>
        </div>
        <div class="sep-bor"></div>
    </div>
</div>

<!-- Hero ends -->  

<div class="clearfix"></div>


<!-- Items List starts -->

<div class="shop-items blocky">
    <div class="container">
        <div class="row">
            @if ($items)
            <h2 class="whatsnew">
                <span style="color:#16CBE6;"><i class="fa fa fa-paw"></i></span>
                What<span style="color:#16CBE6;">'</span>s <span style="color:#16CBE6;">New ?</span>
            </h2>
            <hr>
            @foreach ($items as $row)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item">
                    <!-- Item image -->
                    <div class="item-image">
                        <a href="{{url('shop/' .$row->cat_url . '/' . $row->url)}}"><img style="border-radius: 10px" src="{{asset('img/products/' . $row->image)}}" alt="" class="img-responsive" style="border-radius: 5px"></a>
                    </div>
                    <!-- Item details -->
                    <div class="item-details">
                        <!-- Name -->
                        <h5><a href="{{url('shop/' .$row->cat_url . '/' . $row->url)}}">{{ $row->title }}</a></h5>
                        <div class="clearfix"></div>
                        <!-- Para. Note more than 2 lines. -->
                        <p>{!!$row->shortText!!}</p>
                        <hr />
                        <!-- Price -->
                        <div class="item-price pull-left">{{$row->price }}$</div>
                        <!-- Add to cart -->
                        <button @if (Cart::get($row->id)) disabled="disabled" @endif data-id="{{ $row->id }}"  class=" pull-right btn btn-danger btn-sm add-to-cart">+ Add to Cart</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
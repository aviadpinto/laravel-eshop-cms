@extends('master')

@section('content')

@if ($products)
<div class="page-title">
    <div class="container">
        <h2><i class="fa fa fa-paw color"> Category</i> {{'Dog ' . $title . ' Products'}} </h2>
    </div>
</div>

<div class="row hero">
    <div class="col-md-12 selectes">
        <span class="text-center"><i class="fa fa fa-paw"></i> <b> Sort by Price</b></span>
        <select class="center-block" id="sortBy">
            <option value="empty">-- select option --</option>
            <option value="high" {{ $high }}>Highest First</option>
            <option value="low" {{ $low }}>Lowest First</option>
        </select>
    </div>

</div>   
@endif


<!-- Page content -->
<div class="account-content">
    <div class="container ">

        <div class="row ">  

            @if ($products)


            <div class="col-md-9">
                <div class="shop-items">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a> <span class="divider"></span></li>
                        <li><a href="{{url('shop')}}">Shop Categories</a> <span class="divider"></span></li>
                        <li class="active">{{$title}}</li>
                    </ul>
                    @endif
                    <div class="row">
                        @if ($products)

                        <script> var catUrl = "shop/{{ $cat_url }}";</script>
                        @foreach ($products as $row)

                        <div class="col-md-4 col-sm-6 col-xs-12" >
                            <div class="item"> 
                                <!-- Item image -->
                                <div class="item-image">
                                    <a href="{{url('shop/' .$cat_url . '/' . $row->url)}}"><img style="border-radius: 10px" src="{{asset('img/products/' . $row->image)}}" alt="" class="img-responsive"/></a>
                                </div>
                                <!-- Item details -->
                                <div class="item-details">
                                    <!-- Name -->
                                    <h5><a href="{{url('shop/' .$cat_url . '/' . $row->url)}}">{{ $row->title }}</a></h5>
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


                    </div>
                </div>
            </div>
            @include('inc.catMenu')
                                    @else
           <div class="col-md-8 hero">
                <p><strong>No products to show yet...</strong></p>
          </div>
                        @endif
        </div>
    </div>
</div>


@endsection
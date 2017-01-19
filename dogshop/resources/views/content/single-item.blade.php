@extends('master')

@section('content')
<!-- Page title -->
<div class="page-title">
    <div class="container">
        @if ( isset ($item) && $item ) <h2><i class="fa fa-paw color"> Product </i> {{$title}} <small>  Item ID: {{$item['id']}} </small></h2>
        <hr />
        @endif
    </div>
</div>


<!-- Page content -->

@if ( isset($item) && $item)
<div class="shop-items">
    <div class="container">
        <div class="row">
            
            <div class="col-md-9 ">
                <div class="single-item">
                    <div class="row">
                        <div class="col-md-4 col-xs-5">

                            <div >
                                <img src="{{asset('img/products/' . $item['image'])}}"  alt="" class="img-responsive" />
                            </div>

                        </div>
                        <div class="col-md-5 col-xs-7">
                            <!-- Title -->
                            <h4>{{$item['title']}}</h4>
                            <h5><strong>Price : {{$item['price']}} $</strong></h5>
                            <h5>{{$item['shortText']}}</h5>
                            <!-- Add to cart -->
                            <br>
                            <button @if (Cart::get($item['id'])) disabled="disabled" @endif data-id="{{ $item['id'] }}" class="btn btn-danger btn-sm add-to-cart"><i class="fa fa-shopping-cart"></i> + Add to Cart </button>
                            <a href="{{url ('shop/checkout')}}" class="btn btn-info" type="button"><i class="fa fa-credit-card" aria-hidden="true"> </i> CheckOut</a>  
                        </div>
                        
                    </div>
                </div>

                <br><br>

                <!-- Description, specs and review -->

                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                </ul>

                <!-- Tab Content -->
                <div id="myTabContent" class="tab-content">
                    <!-- Description -->
                    <div class="tab-pane fade in active" id="tab1">
                        <h5><strong>{{$title}}</strong></h5>
                        <p>{!! $item['description'] !!}</p>
                    </div>
                    </table>
                    @else
                    <div class="hero"><h3>OOPS! No item...</h3></div>
                    @endif                        
                </div>
            </div>
            <br>
            @include('inc.catMenu')
        </div>
    </div>
</div>
@endsection
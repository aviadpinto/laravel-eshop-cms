<?php
if ($cart = Cart::getContent()) {
    $cart = $cart->toArray();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Title here -->
        <title>{{$title}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script> var BASE_URL = "{{ url('') }}/"; var SRC_URL = "{{ asset('') }}"</script>

        @include('inc.header_css')
    </head>

    <body>
        @include('inc.cart')         
        <!-- Logo & Navigation starts -->

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="{{url('/')}}">DOGSHOP</a></h1> 
                        </div> 
                    </div>
                    <div class="col-md-6 col-sm-5">

                        <!-- Navigation menu -->
                        <div class="navi">

                            <div id="ddtopmenubar" class="mattblackmenu">
                                <ul>

                                    <li><a href="{{url('./')}}" rel="ddsubmenu1"><small><i class="fa fa fa-paw"></i></small> Home</a></li>
                                    <li><a href="{{url ('shop')}}" rel="ddsubmenu1">SHOP</a></li>
                                    @if ($menu)
                                    @foreach ($menu as $page)
                                    <li><a href="{{ url ($page['url']) }}" rel="ddsubmenu1">{{ $page['link'] }}</a></li>
                                    @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <!-- Dropdown NavBar -->
                        <div class="navis"></div>                   
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="kart-links">
                            @if ( Session::has('user_id') )
                            <a href="{{url('user/user')}}">{{ Session::get('user_name') }} </a> 

                            @if ( Session::has('is_admin') )
                            <a href="{{url('cms/dashboard')}}">CMS</a> 
                            @endif

                            <a href="{{url('user/logout')}}">LOGOUT</a>                             
                            @else
                            <a href="{{url('user/signin')}}">Sign-In</a> 
                            <a href="{{url('user/signup')}}">Sign-Up</a>
                            @endif
                            <a data-toggle="modal" href="#shoppingcart" href="{{url ('shop/checkout')}}"><i class="fa fa-shopping-cart"></i> {{ Cart::getTotalQuantity() }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="search_group">
            <div class="container_search">
                <input type="text" class="form-control" id="main_searchBox" placeholder="Search Products..." autocomplete="off">  
            </div>
            <div class="search_results"></div>
        </div>    


        <!--
<form class=" form-horizontal searchForm">
    <div class="form-group" class="wrapper_searchbox" style="margin-bottom: 0;">
    <div class="col-sm-12">
    </div>
    <div  class="col-sm-12">
        <i class="fa fa-search" aria-hidden="true"></i>
    </div>
  </div>
    
</form>

        <!-- Logo & Navigation ends -->
        @include('inc.msg')
        @include('inc.errors')
        @yield('content') 

        @include ('inc.footer')

        <!-- Scroll to top -->
        <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

        @include ('inc.footer_js')
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - DOGSHOP</title>
        <script> var BASE_URL = "{{ url('') }}/";</script>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        @include('inc.header_css')
        <!-- My CSS -->
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
                <link href="{{asset('css/cmsStyle.css')}}" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url ('cms/dashboard')}}">DOGSHOP</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a target="_blank" href="{{url('')}}">Back to DOGSHOP</a></li>
                        <li><a href="{{ url('user/logout') }}">SignOut</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li><a href="{{url ('cms/dashboard')}}">Dashboard</a></li>
                        <li><a href="{{url ('cms/menu')}}">Menu</a></li>
                        <li><a href="{{url ('cms/content')}}">Content</a></li>
                        <li><a href="{{url ('cms/categories')}}">Categories</a></li>
                        <li><a href="{{url ('cms/products')}}">Products</a></li>
                        <li><a href="{{url ('cms/orders')}}">Orders</a></li>
                        <li><a href="{{url ('cms/users')}}">Users & Admin</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <!-- messages -->
                    @include ('inc.errors')
                    @include ('inc.msg')

                    <!-- content -->
                    @yield('cms_content')              
                </div>
            </div>
        </div>

        <!-- javascript -->   
        @include ('inc.footer_js')
        <!-- summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
        <script>
            $(document).ready(function () {
                $('#summernote').summernote({
                    height:300,
                });
            });
        </script>
    </body>
</html>

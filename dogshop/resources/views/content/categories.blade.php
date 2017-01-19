@extends('master')

@section('content')


<!-- Page title -->
<div class="page-title">
    <div class="container">
<h2><i class="fa fa-paw color"> Shop Categories </i></h2>
        <hr />
  </div>
</div>


<div class="row hero">   

    @if ( $categories)     

    @foreach ($categories as $row)

    <div class="col-md-4 col-sm-6">  
        <h2><strong><a href="{{url('shop/' . $row['url'])}}"> {{$row['title']}}</a></strong></h2>
        <p>
            <a href="{{url( 'shop/' . $row['url'])}}"><img class="" border="0" width="200" height="150" style="border-radius: 15px" src="{{asset('img/categories/' . $row['image'])}}"></a>
            <br>
            <span> {!!$row['article']!!} </span>
            <br><br>
            <a href="{{url('shop/' . $row['url'])}}" class="btn-info  btn-xs">View Products</a>
        </p>
    </div>

    @endforeach
</div>
@else
<div class="col-md-12">
    <p><strong>No Categories...</strong></p>
</div>
@endif

@endsection
@extends('master')

@section('content')
<!-- Page title -->
<div class="page-title">
    <div class="container">
        <h2><i class="fa fa-paw color"> </i> {{$link}}</h2>
        <hr>
    </div>
</div>
    @if ($contents)

    @foreach ($contents as $row)
<div class="about-us center-block">
    <div class="container">
        <div class="row">

            <div class="col-md-12" style="border: 1px solid gray">               
                <h1>{{$row['title']}}</h1>
                    {!! $row['article'] !!}
               
            </div>
        </div>
        <!-- About team ends -->
        <div class="sep-bor"></div>
    </div>
</div>
    @endforeach
    @else

    
<div class="about-us blocky">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">               
                <h4>No content found...</h4>               
            </div>
        </div>
        <!-- About team ends -->
        <div class="sep-bor"></div>
    </div>
</div>
    
    
    @endif
@endsection




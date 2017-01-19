@extends('master')

@section('content')
<!-- Page title -->
<div class="page-title">
    <div class="container">
        <h2><i class="fa fa-paw color"></i> My Account</h2>
        <hr>

    </div>
</div>


<!-- Page content -->
<div class="account-content">
    <div class="container">

        <div class="row">
            @include('inc.userMenu')
            <div class="col-md-9">
                <h3><i class="fa fa-user color"></i> &nbsp;My Account</h3>
                <!-- Your details -->
                <div class="address">
                    <address>
                        <!-- Your name -->
                        <strong>{{$user[0]->name}}</strong><br>
                        <!-- Address -->
                        {{$user[0]->address}}<br>

                        <!-- Phone number -->
                        Phone: {{$user[0]->phone}}<br>
                        {{$user[0]->email}}
                    </address>
                </div>

                <hr />

                <h4>My Recent Purchase</h4>
    @if ( isset ( $lastItems[0]->data ) && $lastItems[0]->data)            
                <table class="table table-striped tcart">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Item ID</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( unserialize($lastItems[0]->data) as $item)
                        <tr>
                            <td>{{$lastItems[0]->created_at}}</td>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['quantity']}}</td>
                            <td>${{$item['price']}}</td>
                            <td>${{$item['price'] * $item['quantity']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    @else
    <p>No Orders...</p>
    @endif
            </div>
        </div>

        <div class="sep-bor"></div>
    </div>
</div>

@endsection
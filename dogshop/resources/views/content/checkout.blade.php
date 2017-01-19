@extends('master')

@section('content')

<!-- Page title -->
<div class="page-title">
    <div class="container">
     <h2><i class="fa fa-paw color"></i> {{$title}}</h2>
        <hr>
  </div>
</div>

@if ($cart)

      <div class="view-cart blocky">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               
                  <!-- Table -->
                  
                    <table class="table table-striped" style="">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Quantity</th>
                          <th>Unit Price</th>
                          <th>Total</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($cart as $item)  
                        <tr>  
                           
                          <!-- Product  name -->
                          <td><a href="{{url( 'shop/' .  $item['attributes']['catUrl']. '/' . $item['attributes']['url'] )}}">{{$item['name']}}</a></td>
                          <!-- Product image -->
                          <td><a href="{{url( 'shop/' .  $item['attributes']['catUrl']. '/' . $item['attributes']['url'] )}}"><img src="{{asset('img/products/' . $item['attributes']['image'])}}" class="img-responsive"/></a></td>
                          <!-- Quantity with refresh and remove button -->
                          <td>
                            <div class="input-group">
                                  <!-- minus -->
                              <span class="input-group-btn">
                                <button data-id="{{$item['id']}}" data-op="minus" class="btn btn-danger update-cart" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                              </span>
                              <input type="text" class="form-control" placeholder="{{ $item['quantity'] }}">
                              <span class="input-group-btn">
                                  <!-- plus -->
                                <button data-id="{{$item['id']}}" class="btn btn-info update-cart" data-op="plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                              </span>         
                            </div>
                          </td>
                          <!-- Unit price -->
                          <td>${{$item['price']}} </td>
                          <!-- Total cost -->
                          <td>${{ $item['quantity'] * $item['price'] }}</td>
                          <td><a href="#" class="btn btn-danger remove-item" data-id="{{$item['id']}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>${{Cart::getTotal()}}</strong></td>
                        <td></td>
                      </tbody>
                    </table>

                  
                     <div class="sep-bor"></div>
                     <!-- Button s-->
                    <div class="row">
                      <div class="span4 offset8">
                        <div class="pull-right">
                          <a href="{{url('shop/order')}}" class="btn btn-info"><i class="fa fa-credit-card" aria-hidden="true"></i> ORDER NOW</a>
                        </div>
                        <div class="pull-left">
                          <a href="{{url('shop/clear-cart')}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> CLEAR CART</a>
                        </div> 
                      </div>
                    </div>

               
               </div>
            </div>
         </div>
      </div>
@else
    <div class="hero">
    <p><strong>Cart is empty :(</strong></p>
     <a href="{{url('shop')}}" class="btn btn-info">Go Shop</a>
    </div>
@endif
@endsection
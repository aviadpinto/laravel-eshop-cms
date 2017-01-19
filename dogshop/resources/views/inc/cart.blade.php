
<div class="modal fade" id="shoppingcart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Shopping Cart</h4>
            </div>
            <div class="modal-body">

                <!-- Items table -->
                <table class="table table-striped">
                    <thead>
                        @if (isset($cart) && $cart)
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($cart as $item)  

                        <tr>
                            <td><a href="{{url( 'shop/' .  $item['attributes']['catUrl']. '/' . $item['attributes']['url'] )}}">{{$item['name']}}</a></td>
                            <td>{{$item['quantity']}}</td>
                            <td>${{ $item['quantity'] * $item['price'] }}</td>
                        </tr>
                        <tr>
                            @endforeach

                            @else
                        <tr><th>No Products...</th></tr>
                        @endif
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
                <a href="{{url('shop/checkout')}}"><button type="button" class="btn btn-info">Checkout Page</button></a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

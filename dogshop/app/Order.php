<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Cart;
use DB;

class Order extends Model {

    static public function saveOrder(){
        
        $cartCollection = Cart::getContent();
        
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($cartCollection->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        session::flash('success', 'Your order has been sent! Thank you for shopping!');  
    }
    
    
    static public function getOrders(&$data){
        $sql = "SELECT u.name, u.email,u.address, o.* FROM orders o "
                . " JOIN users u ON o.user_id = u.id "
                . " ORDER BY o.created_at DESC " ;
        
        $data['orders'] = DB::select($sql);
        
    }
    
    
}

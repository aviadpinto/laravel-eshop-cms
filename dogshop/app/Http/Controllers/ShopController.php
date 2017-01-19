<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use Cart;
use Session;
use App\Order;


class ShopController extends MainController {

    public function categories() {
        self::$data ['categories'] = Categorie::all()->toArray();
        self::$data ['title'] = 'Shop Categories';
        return view('content.categories', self::$data);
    }

    public function products($category_url, Request $request = null) {
        Categorie::getMenuCat(self::$data);
        Product::getProducts($category_url, self::$data, $request);
        return view('content.products', self::$data);
    }

    public function item($category_url, $item_url) {
        Categorie::getMenuCat(self::$data);
        Product::getItem($item_url, self::$data);
        return view('content.single-item', self::$data);
    }

    public function addToCart(Request $request) {
        Product::addToCart($request['id']);
    }

    public function checkout() {
        self::$data['title'] = 'CheckOut';
        $cartCollection = Cart::getContent();
        $cart = $cartCollection->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('content.checkout', self::$data);
    }

    public function clearCart() {
        Cart::clear();
        return redirect('shop/checkout');
    }

    public function updateCart(Request $request) {

        Product::cartUpdate($request['id'], $request['op']);
    }

    public function removeFromCart(Request $request) {
        Product::removeFromCart($request['ItemId']);
    }

    public function order() {
        if (!Session::has('user_id')) {
            Session::flash('success', 'You must sign in to order');
            return redirect('user/signin?destination=shop/order');
        } else {
            Order::saveOrder();
            return redirect('shop');
        }
    }
    
    public function getSearchProducts(Request $request){
        echo Product::getSearchProducts($request, self::$data);
      
    }
    

}

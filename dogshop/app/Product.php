<?php namespace App;

use Cart;
use Session;
use App\Categorie;
use Illuminate\Database\Eloquent\Model;
use DB;


class Product extends Model {

    static public function getProducts($category_url, & $data, $request) {

        $data['products'] = [];

        if ($category = Categorie::where('url', '=', $category_url)->first()) {

            $category = $category->toArray();
            $data['title'] = $category['title'];
            $data['cat_url'] = $category_url;

            $catId = $category['id'];
            $sql = "SELECT * FROM products WHERE categorie_id = $catId ";

            $data ['high'] = '';
            $data ['low'] = '';

            if ($request['sortby'] == 'high') {
                $sql .= " ORDER BY price DESC";
                $data ['high'] = 'selected="selected"';
            } elseif ($request['sortby'] == 'low') {
                $sql .= " ORDER BY price ASC";
                $data ['low'] = 'selected="selected"';
            }

            $data ['products'] = DB::select($sql);
        }
    }

    static public function getItem($item_url, & $data) {
        $data['items'] = [];

        if ($item = self::where('url', '=', $item_url)->first()) {

            $item = $item->toArray();
            $data['title'] = $item['title'];
            $data['item'] = $item;
        }
    }

    static public function addToCart($product_id) {

        if ($product = self::find($product_id)) {
            $product = $product->toArray();

            if (!Cart::get($product['id'])) {

                if ($cat = Categorie::where('id', '=', $product['categorie_id'])->first()) {
                    Cart::add($product['id'], $product['title'], $product['price'], 1, [
                        'image' => $product['image'],
                        'url' => $product['url'],
                        'catUrl' => $cat['url'],
                    ]);

                    Session::flash('success', $product['title'] . ' is added to cart!');
                }
            }
        }
    }

    static public function cartUpdate($id, $op) {

        if ($product = Cart::get($id)) {

            if ($op == 'plus') {

                Cart::update($id, ['quantity' => 1]);
            } else if ($op == 'minus') {

                $product = $product->toArray();

                if ($product['quantity'] > 0) {

                    Cart::update($id, ['quantity' => -1]);
                } else if ($product['quantity'] == 0) {

                    $product['quantity'] == 1;
                }
            }
        }
    }

    static public function removeFromCart($ItemId) {
        Cart::remove($ItemId);
    }

    static public function saveProduct($request) {

        $image_name = 'default.jpg';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.n.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path('/img/products'), $image_name);
        }

        $product = new self();
        $product->title = $request['title'];
        $product->shortText = $request['shortText'];
        $product->description = $request['description'];
        $product->url = $request['url'];
        $product->image = $image_name;
        $product->price = $request['price'];
        $product->categorie_id = $request['category'];
        $product->save();
        Session::flash('success', 'New Product has been saved');
    }

    static public function updateProduct($request, $id) {

        $image_name = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.n.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path('/img/products'), $image_name);
        }

        $product = self::find($id);
        $product->title = $request['title'];
        $product->shortText = $request['shortText'];
        $product->description = $request['description'];
        $product->url = $request['url'];
        if ($image_name) {
            $product->image = $image_name;
        }
        $product->price = $request['price'];
        $product->categorie_id = $request['category'];
        $product->save();
        Session::flash('success', 'Product has been updated');
    }

    static public function mainPageProducts(& $data) {
        $sql = 'SELECT c.url cat_url , p.id, p.title, p.shortText, p.url, p.image, p.price '
                . ' FROM products p JOIN categories c ON c.id = p.categorie_id '
                . ' ORDER BY p.created_at DESC LIMIT 8 ';
        $sql2 = '';
        
        $data['items'] = DB::select($sql);
    }

    static public function getSearchProducts($request, $data) {
        if (!empty($request['search'])) {
            
        $searchText = $request['search'];
        
        $data =  DB::table('products')->
                select('products.title', 'products.url', 'products.image',
                       'categories.url as cat_url') 
                ->join('categories', function ($join) use($searchText) {
                $join->on('products.categorie_id', '=', 'categories.id')
                 ->where('products.title', 'like', '%'.$searchText.'%'); 
        })->get();
        
          $collection = collect($data);
          return $collection->toJson();
            
        }
    }

}

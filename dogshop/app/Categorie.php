<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Categorie extends Model {

    public function products() {
        return $this->hasMany('App\Product');
    }
    
    static public function getOrdered($category_id, & $data) {
        $sql = "SELECT * FROM categories ORDER BY "
                . " CASE WHEN id = $category_id THEN 0 ELSE id END";
        $data['category'] = DB::select($sql);
    }
    
    static public function saveCategory($request) {

        $image_name = 'default.jpg';

        if ( $request->hasFile('image') && $request->file('image')->isValid() ) {
           $file = $request->file('image');
           $image_name = date('Y.n.d.H.i.s') . '-' . $file->getClientOriginalName() ; 
           $request->file('image')->move( public_path( '/img/categories' ), $image_name );         
        }
        
        $category = new self();
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->image = $image_name;
        $category->url = $request['url'];
        $category->save();
        Session::flash('success', 'New Category has been saved');

    }
    
    static public function updateCategory($request, $id) {
        
        $image_name = '';
        if ( $request->hasFile('image') && $request->file('image')->isValid() ) {
           $file = $request->file('image');
           $image_name = date('Y.n.d.H.i.s') . '-' . $file->getClientOriginalName() ; 
           $request->file('image')->move( public_path( '/img/categories' ), $image_name );    
        }  
        
        $category = self::find($id); 
        $category->title = $request['title'];
        $category->article = $request['article'];
        if ($image_name){
         $category->image = $image_name;   
        }
        $category->url = $request['url'];
        $category->save();
        Session::flash('success', 'Category has been updated');
    }
    
    static public function getMenuCat( & $data ){
        
        $data['cat_menu'] = DB::table('categories')->select('title', 'url')->get();
        
    }
    
    

}

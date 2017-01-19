<?php namespace App\Http\Controllers;

use App\Http\Controllers\MainController;
use App\Content;
use App\Product;

class PagesController extends MainController { 
    
    public function home (){
      Product::mainPageProducts(self::$data);  
      return view ('content.home',  self::$data);
    }
    
    public function boot($url){
      Content::getContent($url, self::$data);
      return view ('content.boot', self::$data);
    }


}

<?php namespace App\Http\Controllers;

use App\Menu;

class MainController extends Controller {
    
     static public $data = ['title' => 'DOGSHOP - Your dog deserves more!'];
     
     function __construct() {
         self::$data['menu'] = Menu::all()->toArray();
     }
     
 }


 

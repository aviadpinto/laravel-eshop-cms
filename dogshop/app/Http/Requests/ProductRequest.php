<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class ProductRequest extends FormRequest {

    public function authorize() {
        return true;
    }
    
    public function rules() {
        $all = Input::all();
        $product_id = !empty($all['id']) ? ',' . $all['id'] : '' ;
        return [
            'title' => 'required',
            'category' => 'required',
            'url' => 'required|unique:categories,url' . $product_id,
            'price' => 'required|numeric',
            'shortText' => 'required',
            'description' => 'required',
            'image' => 'image',
        ];
    }
    
    
}

<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class CategoryRequest extends FormRequest {

    public function authorize() {
        return true;
    }
    
    public function rules() {
        $all = Input::all();
        $category_id = !empty($all['id']) ? ',' . $all['id'] : '' ;
        return [
            'title' => 'required',
            'article' => 'required',
            'url' => 'required|unique:categories,url' . $category_id,
            'image' => 'image',
        ];
    }
    
    
}

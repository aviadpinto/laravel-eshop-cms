<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class MenuRequest extends FormRequest {

    public function authorize() {
        return true;
    }
    
    public function rules() {
        $all = Input::all();
        $menu_id = !empty($all['id']) ? ',' . $all['id'] : '' ;
        return [
            'link' => 'required',
            'title' => 'required',
            'url' => 'required|unique:menus,url' . $menu_id,
        ];
    }
    
    
}

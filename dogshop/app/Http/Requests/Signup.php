<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class Signup extends FormRequest {

    public function authorize() {
        return true;
    }
    
    public function rules() {

        
        return [
            'name' => 'required|min:2|max:255|regex:/^[a-z]+(\s[a-z]+)*$/i',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|min:10|max:80|regex:/^[\d\.\-\+]{10,}$/i',
        ];
    }
    
    public function messages() {
       return [
          'name.regex' => 'Name must contain A-Z letters only.', 
           'phone.regex' => 'Phone can get numbers only, and: -, +, . ', 
       ];
    }
}

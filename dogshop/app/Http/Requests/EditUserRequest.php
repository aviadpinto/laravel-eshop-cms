<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use App\User;
use Session;

class EditUserRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        $input = Input::all();


        if (array_has($input, 'check')) {

            $rules = [
                'oldPassword' => 'required',
                'password' => 'required|min:6|confirmed',
            ];
        } else {
            $user = User::find(Session::get('user_id'))->toArray();
            $emailval = $user['email'] === $input['email'] ? '|exists:users,email' : '|unique:users,email';
              
            $rules = [
                'name' => 'required|min:2|max:255|regex:/^[a-z]+(\s[a-z]+)*$/i',
                'email' => 'required|email' . $emailval,
                'phone' => 'required|min:10|max:80|regex:/^[\d\.\-\+]{10,}$/i',   
            ];
        }
        return $rules;
    }

    public function messages() {
        return [
            'name.regex' => 'Name must contain A-Z letters only.',
            'phone.regex' => 'Phone can get numbers only, and: -, +, . ',
        ];
    }

}

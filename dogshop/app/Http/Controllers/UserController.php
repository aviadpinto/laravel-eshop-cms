<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Signin;
use App\Http\Requests\Signup;
use App\Http\Requests\EditUserRequest;
use App\User;
use Session;

class UserController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('userSigned', ['except' => ['logout', 'user', 'editUser', 'postEditUser', 'editPass', 'postEditPass']]);
    }

    public function signin(Request $request) {
        self::$data['destination'] = $request['destination'];
        self::$data['title'] = 'Sign-In Page';
        return view('form.signin', self::$data);
    }

    public function postSignin(Signin $request) {
        if (User::validateUser($request['email'], $request['password'])) {

            return !empty($request['destination']) ? redirect($request['destination']) : redirect('');
        } else {
            $des = 'user/signin';
            $des .= !empty($request['destination']) ? '?destination=' . $request['destination'] : '';
            return redirect($des)->withErrors('Wrong email/password combination');
        }
    }

    public function signup() {
        self::$data['title'] = 'Sign-Up Page';
        return view('form.signup', self::$data);
    }

    public function postSignup(Signup $request) {
        User::saveUser($request);
        return redirect('user/signin');
    }

    public function logout() {
        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('is_admin');
        return redirect('user/signin');
    }

    public function user() {

        if (!Session::has('user_id')) {
            return redirect('');
        } else {
            self::$data['title'] = 'User Page';
            User::getUserDetails(Session::get('user_id'), self::$data);
            return view('content.user', self::$data);
        }
    }

    public function editUser() {

        if (!Session::has('user_id')) {
            return redirect('');
        } else {
            self::$data['title'] = 'Edit User';
            User::getUserDetails(Session::get('user_id'), self::$data);
            self::$data['user'] = self::$data['user'][0];
            return view('form.useredit', self::$data);
        }
    }
    
    public function postEditUser(EditUserRequest $request){
        User::updateUserDetails($request);
        
        if (Session::get('pass_val') == 'no'){
            Session::forget('pass_val');
            return redirect('user/changepassword')->withErrors('Wrong old password.');
        }
        
        return redirect('user/user');
        
    }
    
    public function editPass (){
      return view('form.userpassedit', self::$data);  
    }
    
    
    

}

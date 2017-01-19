<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;

class UserCmsController extends MainController {
    
    function __construct() {
        parent::__construct();
        $this->middleware('adminValid');
    }

    public function index() {
       User::getUsersCms(self::$data);
       return view('cms.users', self::$data);   
       }


    public function create() {
     
    }


    public function store() {

    }


    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.delete_user', self::$data);
    }


    public function edit($id) {
       User::getUserAsAdmin($id, self::$data);
       return view('cms.edit_user', self::$data);
    }


    public function update(Request $request, $id) {
        User::updateUserCms($request, $id);
        return redirect('cms/users');
    }


    public function destroy($id) {
     User::destroy($id);
     Session::flash('success', 'User has been deleted');
     return redirect('cms/users');
    }

}

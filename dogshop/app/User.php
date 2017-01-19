<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;
use Hash;
use Illuminate\Support\Facades\Input;

class User extends Model {

    static public function validateUser($email, $password) {

        $valid = false;

        $sql = "SELECT * FROM users u "
                . " Join users_role r ON u.id = r.uid "
                . " WHERE u.email = ?";

        $user = DB::select($sql, [$email]);

        if ($user) {
            $user = $user[0];

            if (Hash::check($password, $user->password)) {
                $valid = true;

                if ($user->roll_id == 3) {
                    Session::set('is_admin', true);
                }

                Session::set('user_id', $user->id);
                Session::set('user_name', $user->name);
                Session::flash('success', 'Hello ' . Session::get('user_name') . ' !');
            }
        }

        return $valid;
    }

    static public function saveUser($request) {
        $request['address'] = trim ($request['address']);
        $address = $request['address'] ? $request['address']: '- Empty Address -';
        
        
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->address = $address;
        $user->phone = $request['phone'];
        $user->save(); 

        $new_id = $user->id;
        $sql = "INSERT INTO users_role VALUES($new_id, 4)";
        DB::insert($sql);
        Session::flash('success', 'Your account created successfully! Now it\'s time to signin! ');
    }

    static public function getUserDetails($id, & $data) {
        $sql = "SELECT name, email, address, phone FROM users WHERE id=$id";
        $data['user'] = DB::select($sql);

        $sql = "SELECT data, created_at FROM orders WHERE user_id=$id ORDER BY created_at DESC";
        $data['lastItems'] = DB::select($sql);
    }

    static public function updateUserDetails($request) {
        $id = Session::get('user_id');
        $input = Input::all();

        if (array_has($input, 'check')) {
            $user = DB::select("SELECT password FROM users where id = $id");
            $user = $user[0];

            if ($input['check'] == Session::get('user_id') && Hash::check($request['oldPassword'], $user->password)) {

                $newpass = bcrypt($request['password']);
                $db = DB::table('users')
                        ->where('id', $id)
                        ->update(['password' => $newpass]);
                Session::flash('success', 'Your password has been changed.');
            } else {
                Session::set('pass_val', 'no');
            }
        } else {
            
            $name = $request['name'];
            $email = $request['email'];
            $request['address'] = trim ($request['address']);
            $address = $request['address'] ? $request['address']: '- Empty Address -';
            $phone = $request['phone'];
    
            $db = DB::table('users')
                    ->where('id', $id)
                    ->update(['name' => $name, 'email' =>$email, 'address' => $address, 'phone' => $phone]);

            if ($db) {
                Session::flash('success', 'Your changes saved');
                Session::set('user_name', $name);
            }
        }
    }

    static public function getUsersCms(& $data) {

        if (Session::has('is_admin')) {
            $sql = "SELECT r.roll_id, u.* FROM users u "
                    . " Join users_role r ON u.id = r.uid WHERE u.id > 3 ORDER BY r.roll_id, u.created_at DESC";

            $data['users'] = DB::select($sql);
        }
    }

    static public function getUserAsAdmin($id, & $data) {

        if (Session::has('is_admin')) {
            $sql = "SELECT r.roll_id, u.id FROM users u "
                    . " Join users_role r ON u.id = r.uid WHERE u.id = ?";

            $data['user'] = DB::select($sql, [$id]);
            $data['user'] = $data['user'][0];
        }
    }

    static public function updateUserCms($request, $id) {

        if (Session::has('is_admin') && $request['roll_id'] == 4) {

            $db = DB::table('users_role')
                    ->where('uid', $id)
                    ->update(['roll_id' => 3]);
            Session::flash('success', 'The user is now Admin');
            
        } elseif (Session::has('is_admin') && $request['roll_id'] == 3) {

            $db = DB::table('users_role')
                    ->where('uid', $id)
                    ->update(['roll_id' => 4]);
            Session::flash('success', 'The Admin is now User');
        }
        
    }

    
}

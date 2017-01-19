<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Menu extends Model {

    public function contents() {
        return $this->hasMany('App\Content');
    }

    static public function getOrdered($menu_id, & $data) {
        $sql = "SELECT * FROM menus ORDER BY "
                . " CASE WHEN id = $menu_id THEN 0 ELSE id END";
        $data['menu'] = DB::select($sql);
    }

    static public function saveMenu($request) {
        $menu = new self(); // new self = insert
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('success', 'New Page has been saved');
    }

    static public function updateMenu($request, $id) {
        $menu = self::find($id); // self find = update
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('success', 'Page has been updated');
    }

}

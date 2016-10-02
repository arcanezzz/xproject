<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;
class Menu extends Model{
    
    public function contents(){
        
      return $this->hasMany('App\Content');
    }
   
    static public function saveNewMenu($request){
       
        $menu = new self();
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm','New menu as been added');
        
    }
    
    static public function updateMenu($request, $id){
        
        $menu = Menu::find($id);
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm',' Menu has been updated');
        
    }
    
    static public function orderByContent(&$data){
        
        $menu_id = $data['content_item']['menu_id'];
        
        $sql = "SELECT * FROM menus ORDER BY "
                . "CASE WHEN id = $menu_id THEN 0 ELSE id END";
        
        $data['menu'] = DB::select($sql);
        
        
                
    }
    
}

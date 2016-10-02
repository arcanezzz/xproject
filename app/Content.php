<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Content extends Model {

    static public function getContents($url, &$data) {

        $data['contents'] = [];

        $menu = Menu::where('url', '=', $url)->get();

        if ($menu = $menu->toArray()) {

            $data['title'] = $menu[0]['title'];

            $contents = Menu::find($menu[0]['id'])->contents;

            if ($contents) {

                $data['contents'] = $contents->toArray();
            }
        }
    }

    static public function saveNewContent($request){
        
        $content = new self();
        $content-> menu_id = $request['menu'];
        $content-> title = $request['title'];
        $content-> article = $request['article'];
        $content-> save();
        Session::flash('sm','New content has been added');
        
        
    }
    
    static public function updateContent($request, $id){
      
        $content = Content::find($id);
        $content-> menu_id = $request['menu'];
        $content-> title = $request['title'];
        $content-> article = $request['article'];
        $content-> save();
        Session::flash('sm','Content has been updated');
        
    }
}

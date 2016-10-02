<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Content;


class PagesController extends MainController{
    
    public function index(){
         return view ('content.home',self::$data);
    }
     
    public function boot($url){
        
     Content::getContents($url,self::$data);
     
     return view('content.boot',self::$data);
        
    }
   
}

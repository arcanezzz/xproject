<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Content;


class CmsController extends MainController{
    function __construct() {
        parent::__construct();
        $this->middleware('adminSign');
    }
    
    public function index(){
        
        return view('cms.dashboard',self::$data);
    }
   
}

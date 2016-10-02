<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SignIn;
use App\Http\Requests\SignUp;
use App\User;
use Session;

class UserController extends MainController{
    
    function __construct() {
       parent::__construct();
       $this->middleware('userSign',['except' => ['getLogout']]);
    }


    public function getSignin(Request $request){
        
        if($request['desc']){
            
            self::$data['desc'] = $request['desc'];
        }
        
        self::$data['title'] = 'Sign in page';
        return view('forms.signin',self::$data);
        
        
    }
    
    public function getSignup(){
        self::$data['title'] = 'Sign up page';
        return view('forms.signup',self::$data);        
        
        
    }

        public function postSignin(SignIn $request){
        
      if(User::validateUser($request['email'],$request['password'])){
       $to =  isset($request['desc']) ? $request['desc'] : '';  
       return redirect($to);   
          
      } else{
         self::$data['title'] = 'Sign in page';
         return view('forms.signin',self::$data)->withErrors('Wrong email/password'); 
          
      } 
        
    }
    
    public function postSignup(SignUp $request){
        
     User::saveUser($request);
     return redirect('user/signin');
        
        
    }

        public function getLogout(){
        
        Session::flash('sm','Goodbye ' . Session::get('user_name'));
        Session::forget('user_id');
        Session::forget('user_name');
        
        if(Session::has('is_admin')){
            
            Session::forget('is_admin');
        }
        
        
        return redirect('user/signin');
    }
    
    
}

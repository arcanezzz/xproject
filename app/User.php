<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;
use Hash;

class User extends Model{
    
    static public function validateUser($email,$password){
        
        $valid = false;
        
        $sql = "SELECT * FROM users u "
                . "JOIN roles r ON u.id = r.user_id "
                . "WHERE u.email = ?";
        
       $user = DB::select($sql,[$email]);
        
       if($user){
           
           $user = $user[0];
           
          if(Hash::check($password,$user->password)) {
              
              $valid = true;
              Session::set('user_id',$user->id);
              Session::set('user_name',$user->name);
              Session::flash('sm','Welcome back '. $user->name);
              
              if($user->role_id == 6){
                  
                  Session::set('is_admin',true);
                  
              }
          }
       }
       
        return $valid;
        
        
        
    }
    
    static public function saveUser($request){
        
       $user = new self();
       $user->name = $request['name'];
       $user->email = $request['email'];
       $user->password = bcrypt($request['password']);
       $user->save();
       $user_id = $user->id;
       DB::insert("INSERT INTO roles VALUES($user_id,4)");
       Session::flash('sm','registration successful! you can sign in to your account.');
    }
    
}

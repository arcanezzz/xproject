<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignIn extends Request
{
    
     
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            
            'email'=> 'required|email',
            'password'=> 'required|min:6|max:10',
           
        ];
    }
    
    /*
    public function messages() {
        
        return[
            
            'email.required' => 'your error msg'
            
        ];
    }
     
     */
}

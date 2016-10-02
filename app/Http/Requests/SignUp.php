<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignUp extends Request
{
    
     
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:70|regex:/^[a-z]+(\s[a-z]+)*$/i',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10|regex:/^[A-Z][\w]+$/|confirmed',
           
        ];
    }
    
    
    public function messages() {
        
        return[
            
            'name.regex' => 'The name field must contain only latter',
            'password.regex' => 'The password field must start with A-Z, min 6 max 10 characters',
        ];
    }
     
     
}

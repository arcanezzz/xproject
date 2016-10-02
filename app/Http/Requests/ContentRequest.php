<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class ContentRequest extends Request
{
    
     
    public function authorize()
    {
        return true;
    }

  
    public function rules(){
        
       
        return [
            
            'menu' => 'not_in:-1',
            'title' => 'required',
            'article' => 'required',
        ];
    }
    
    
    public function messages() {
        
        return[
            
            'menu.not_in' => 'The menu field is required,Please choose menu',
            
        ];
    }
     
     
}

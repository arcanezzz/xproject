<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class MenuRequest extends Request
{
    
     
    public function authorize()
    {
        return true;
    }

  
    public function rules(){
        
        $all = Input::all();
        $menu_id = isset($all['menu_id']) ? ',' . $all['menu_id'] : '';
        return [
            
            'link'=> 'required',
            'title'=> 'required',
            'url'=> 'required|regex:/^[a-z\d-]+$/|unique:menus,url' . $menu_id,
        ];
    }
    
    
    public function messages() {
        
        return[
            
            'url.regex' => 'The url must be a-z and digits and -,without spaces',
            
        ];
    }
     
     
}

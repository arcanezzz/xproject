<?php

namespace App;

use Cart;
use Session;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    static public function getProducts($category_url,&$data) {
        
        $data['products'] = [];
        
       $category = Categorie::where('url','=',$category_url)->get();
       
       if($category = $category->toArray()){
           
         $data['title'] = $category[0]['title'] . 'products';
         $data['cat_url'] = $category_url; 
         $products = Categorie::find($category[0]['id'])->products; 
         
         if($products){
             
           $data['products'] = $products->toArray();
         }
         
         
       }
       
       
    }
    
     static public function getProduct ($product_url , &$data){
         
        $data['product'] = [];  
        
         
        $product = Product::where('url', '=', $product_url)->get();
        
        if($product = $product->toArray()){
           
           $data['product'] = $product[0];
           $data['title'] = $data['product']['title']; 
        }
           
   
        }
            
        static public function cartToAdd($product_id){
            
            if($product_id && is_numeric($product_id)){
                
             if($product = Product::find ($product_id)){
                 
                 $product = $product->toArray();
                 
                 if(! Cart::get($product['id'])){
                      Cart::add($product['id'], $product['title'],$product['price'],1,[]);
                      Session::flash('sm',$product['title'] . ' Added to cart.');
                }
                
         }
       }
    }
   
    static public function updateCart($request){
        
      if (!empty($request['id']) &&  is_numeric($request['id'])){
          
          if(!empty($request['op'])){
              
               if($product = Cart::get($request['id'])){
                   
                 $product = $product->toArray();
                 
                 if($request['op'] == 'plus'){
                     
                      Cart::update($request['id'],['quantity' => 1, ]);
                      Session::flash('sm',$product['name'] . ' Cart is updated');
                 
                 } elseif ($request['op'] == 'minus'){
                   
                   if($product['quantity'] -1 == 0){
                       
                       Cart::remove($request['id']);
                       Session::flash('sm',$product['name'].' Remove from cart');
                   }else{
                       
                       Cart::update($request['id'],['quantity' => -1]);
                       Session::flash('sm',$product['name'].' Cart is updated');
                   }
                   
                   
               }
               }
             
          }
      }  
    }
}

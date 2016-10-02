<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categorie;
use App\Product;
use App\Order;
use Cart;
use Session;


class ShopController extends MainController{
    
   public function cat (){
       
      self::$data['title']='Shop categories';

      self::$data['categories'] = Categorie::all()->toArray();
      
      return view('content.categories',self::$data);
      
      
   }
   
   public function  products($category_url){
       
     Product::getProducts($category_url,self::$data);
     
     return view('content.products',self::$data);
       
   }
   
   public function item ($category_url,$product_url){
       Product::getProduct($product_url, self::$data);
       return view('content.item',self::$data);
       
   }
   
   public function addToCart (Request $request){
       
       Product::cartToAdd($request['id']);
   }
   
   public function updateCart(Request $request){
       
       Product::updateCart($request);
       
   }


   public function checkout(){
       
       $cartCollection = Cart::getContent();
       $cartAll =$cartCollection->toArray();
       sort($cartAll);
       self::$data['cart'] = $cartAll;
       self::$data['title'] = 'Checkout Page';
       return view('content.checkout',self::$data);
 
   }
   
   public function clearCart(){
       
       Cart::clear();
       return redirect('shop/checkout');
   }
   
   public function order(){
    
       if(Cart::isEmpty()){
           
       return redirect('shop/checkout');
       
       }else{
           
           if(!Session::has('user_id')){
               
               return redirect('user/signin/?desc=shop/checkout');
           }else{
               
             Order::saveOrder();
             return redirect('shop');
           }
       }
       
   }
}

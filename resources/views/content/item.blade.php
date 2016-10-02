
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-12 text-center">
    <h1>{{$title}}</h1> 
  </div>
</div>
<div class="row text-center" >
    @if($product) 

      <div class="col-md-12">
        <h2>{{$product['title']}}</h2>
        <p>
            <img class="img-rounded" border="0" width="300" src="{{asset('images/' . $product['image'])}}">  
        </p>
        
        <p style="text-align: justify;">{!!$product['article']!!} </p>
        <p><b>Price on site:</b>{{$product['price']}}$</p>
            
        <p>
            <input @if(Cart::get($product['id']))disabled ="disabled" @endif data-id="{{$product['id']}}" type="button" class="add-to-cart btn btn-success" value="Add To Cart">
            <a class="btn btn-primary " href="{{url('shop/checkout')}}">Checkout</a>
        </p>
        
    </div>
    @else
    <p><i>No product found...</i></p>
    @endif

</div>

@endsection
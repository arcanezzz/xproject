
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-12 text-center">
    <h1>{{$title}}</h1> 
  </div>
</div>
<div class="row text-center" >
    @if($cart) 
    <div class="col-md-12">
    <table class="table table-bordered">
        <th>Products</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>sub total</th>

    @foreach($cart as $row)
    <tr>
        <td>{{$row['name']}}</td>
        <td>
            <input type="button" class="update-cart" data-id="{{$row['id']}}" data-op = "minus" value = "-"> 
            <input type="text" size="1" class="text-center" value="{{$row['quantity']}}">
            <input type="button" class= "update-cart"  data-id="{{$row['id']}}" data-op = "plus" value = "+"> 
        </td>
        <td>{{$row['price']}}$</td>
        <td>{{$row['quantity']* $row['price']}}$</td>
    </tr>
    
   
    @endforeach
    <tr>
        <td><b>Total in cart:</b>{{Cart::getTotal()}}$</td>
        <td></td>
        <td></td>
        <td><a href="{{url('shop/clear-cart')}}" class="btn btn-default">Clear cart</a></td>
    </table>
        <p class="text-left"><a href="{{url('shop/order')}}" class="btn btn-primary">Order now!</a></p> 
    </div>
    @else
    <p><i>No products in cart...</i> <a href="{{url('shop')}}">Go to shop</a></p>
    @endif

</div>

@endsection

@extends('master')

@section('content')

<div class="row">
  <div class="col-md-12 text-center">
    <h1>{{$title}}</h1> 
  </div>
</div>
<div class="row text-center" >
    @if($products) 

    @foreach($products as $row) 

    <div class="col-md-6">
        <h2>{{$row['title']}}</h2>
        <p>
            <img class="img-rounded" border="0" width="300" src="{{asset('images/' . $row['image'])}}">  
        </p>
        
        <p style="text-align: justify;">{!!$row['article']!!} </p>
        <p><b>Price on site:</b>{{$row['price']}}$</p>
            
        <p>
            <input @if(Cart::get($row['id']))disabled ="disabled" @endif data-id="{{$row['id']}}" type="button" class="add-to-cart btn btn-success" value="Add To Cart">
            <a class="btn btn-primary " href="{{url('shop/'. $cat_url . '/' . $row['url'])}}">View Details</a>
        </p>
        
    </div>
    @endforeach
    @else
    <p><i>No products found...</i></p>
    @endif

</div>

@endsection
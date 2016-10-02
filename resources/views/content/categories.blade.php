
@extends('master')

@section('content')

<div class="col-md-12 text-center">
    <h1>Shop categories</h1> 
</div>

<div class="row text-center" >
   @if($categories) 
    
    @foreach($categories as $row) 

    <div class="col-md-4">
        <h2>{{$row['title']}}</h2>
        <p>
            <img class="img-rounded" border="0" width="300" src="{{asset('images/' . $row['image'])}}">  
        </p>
        <p>
            {!!$row['article']!!}
        </p>
        <p>
            <a class="btn btn-primary " href="{{url('shop/'.$row['url'])}}">View products</a>
        </p>
    </div>
    @endforeach
    @else
    <p><i>No categories found...</i></p>
   @endif

</div>

@endsection
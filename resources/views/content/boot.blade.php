
@extends('master')

@section('content')

@if($contents)

@foreach($contents as $content)

<div class="row">

    <div class="col-md-12"> 
        <h1>{{  $content['title'] }}</h1>
        <p>{{!! $content['article'] !!}}</p>
    
    </div>

</div>
@endforeach

@else

<p><i>No content...</i></p>

@endif


@endsection




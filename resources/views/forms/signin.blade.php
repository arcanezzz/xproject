
@extends('master')

@section('content')
<div class="row">
    <div class="col-md-6">

        <h1> Please Sign in to your account</h1>
        <form action="" method="post">
            {{csrf_field()}}
            
            @if(isset($desc))
            <input type="hidden" name="desc" value="{{$desc}}">
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input value="{{Illuminate\Support\Facades\Input::old('email')}}" type="text" name="email" class="form-control"  placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Password">
            </div>
            
            <button type="submit" name="submit"class="btn btn-primary">Sign in</button>
        </form>
    </div>

</div>

@endsection

@extends('master')

@section('content')
<div class="row">
    <div class="col-md-6">

        <h1> New user? Sign up now!</h1>
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{Illuminate\Support\Facades\Input::old('name')}}" type="text" name="name" class="form-control"  placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input value="{{Illuminate\Support\Facades\Input::old('email')}}" type="text" name="email" class="form-control"  placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm password</label>
                <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm password">
            </div>
            
            <button type="submit" name="submit"class="btn btn-primary">Sign up</button>
        </form>
    </div>

</div>

@endsection
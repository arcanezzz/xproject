
@extends('cms.cms_master')

@section('cms_content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Menu</h1>

    <div class="row">
        <p><a href="{{url('cms/menu/create')}}" class="btn btn-primary">+Add new menu</a></p>
    </div>
        
    @if($menu)
    
    <h2 class="sub-header">Edit/Delete navigation menu</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th>Link</th>
                    <th>Operation</th>
                    <th>Last update</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $row)
                <tr>
                    <td>{{$row['link']}}</td>
                    <td>
                        <a href="{{url('cms/menu/' . $row['id'] . '/edit')}}">Edit</a> |
                        <a href="{{url('cms/menu/' . $row['id'])}}">Delete</a>
                    </td>
                    <td>
                        {{$row['updated_at']}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection
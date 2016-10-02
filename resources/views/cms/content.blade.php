
@extends('cms.cms_master')

@section('cms_content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Content</h1>

    <div class="row">
        <p><a href="{{url('cms/content/create')}}" class="btn btn-primary">+Add new content</a></p>
    </div>
        
    @if($contents)
    
    <h2 class="sub-header">Edit/Delete site contnet</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th>Title</th>
                    <th>Operation</th>
                    <th>Last update</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $row)
                <tr>
                    <td>{{$row['title']}}</td>
                    <td>
                        <a href="{{url('cms/content/' . $row['id'] . '/edit')}}">Edit</a> |
                        <a href="{{url('cms/content/' . $row['id'])}}">Delete</a>
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
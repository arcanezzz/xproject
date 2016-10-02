
@extends('cms.cms_master')

@section('cms_content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Are you sure you want to delete this content?</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="{{url('cms/content/'. $content_id)}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
            {{csrf_field()}}

            <button type="submit" name="submit"class="btn btn-primary">Delete</button>
            <a href="{{url('cms/content')}}" class="btn btn-default">Cancel</a>
        </form>
            
        </div>
        
    </div>
        
   
</div>

@endsection
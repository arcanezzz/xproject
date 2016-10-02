
@extends('cms.cms_master')

@section('cms_content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit this menu</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="{{url('cms/menu/' . $menu_item['id'])}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="menu_id" value="{{$menu_item['id']}}">
            {{csrf_field()}}
            
             <div class="form-group">
                <label for="link">Link</label>
                <input value="{{$menu_item['link'] }}" type="text" name="link" class="form-control type-auto"  placeholder="Link">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{$menu_item['title']}}" type="text" name="title" class="form-control"  placeholder="Title">
            </div>
             <div class="form-group">
                <label for="url">Url</label>
                <input value="{{$menu_item['url']}}" type="text" name="url" class="form-control url-field"  placeholder="Url">
            </div>
           
           
           
            <button type="submit" name="submit"class="btn btn-primary">Update menu</button>
            <a href="{{url('cms/menu')}}" class="btn btn-default">Cancel</a>
        </form>
            
        </div>
        
    </div>
        
   
</div>

@endsection
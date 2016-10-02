
@extends('cms.cms_master')

@section('cms_content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit this content</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="{{url('cms/content/' . $content_item['id'])}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
            
             <div class="form-group">
                <label for="menu">Menu</label>
                
                <select class="form-control" name="menu">
                    
                    @foreach($menu as $row)
                    
                    <option value="{{$row->id}}">{{$row->link}}</option>
                    
                    @endforeach
                </select>
                
             </div>
             <div class="form-group">
                <label for="title">Title</label>
                <input value="{{$content_item['title']}}" type="text" name="title" class="form-control "  placeholder="Title">
            </div>
            
             <div class="form-group">
                 <label for="article">Article</label><br>
                 <textarea id="editor1" class="form-control" cols="75" rows="20" name="article">{{$content_item['article']}}</textarea>
            </div>
           
           
           
            <button type="submit" name="submit"class="btn btn-primary">Update content</button>
            <a href="{{url('cms/content')}}" class="btn btn-default">Cancel</a>
        </form>
            
        </div>
        
    </div>
        
   
</div>

@endsection
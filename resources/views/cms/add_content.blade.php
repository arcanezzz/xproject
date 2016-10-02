
@extends('cms.cms_master')

@section('cms_content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Add new content</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="{{url('cms\content')}}" method="post">
            {{csrf_field()}}
            
             <div class="form-group">
                <label for="menu">Menu</label>
                
                <select class="form-control" name="menu">
                    <option value="-1">Choose menu...</option>
                    @foreach($menu as $row)
                    
                    <option value="{{$row['id']}}">{{$row['link']}}</option>
                    
                    @endforeach
                </select>
                
             </div>
             <div class="form-group">
                <label for="title">Title</label>
                <input value="{{Illuminate\Support\Facades\Input::old('title')}}" type="text" name="title" class="form-control "  placeholder="Title">
            </div>
            
             <div class="form-group">
                 <label for="article">Article</label><br>
                 <textarea id="editor1" class="form-control" cols="75" rows="20" name="article">{{Illuminate\Support\Facades\Input::old('article')}}</textarea>
            </div>
           
           
           
            <button type="submit" name="submit"class="btn btn-primary">Save content</button>
            <a href="{{url('cms/content')}}" class="btn btn-default">Cancel</a>
        </form>
            
        </div>
        
    </div>
        
   
</div>

@endsection
<html>
    <head>
        <title>{{ $title }}</title>
        <script> var BASE_URL = "{{url('')}}/"</script>

        <link rel="stylesheet" type="text/css" href="{{ asset('libraries/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('libraries/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
        <script type="text/javascript" src="{{asset('libraries/ckeditor/ckeditor.js')}}"></script>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('cms/dashboard')}}">Exo Gaming CMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('')}}">Back to site</a></li>
            <li><a href="{{url('user/logout')}}">Logout</a></li>
          
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="{{url('cms/dashboard')}}">Dashboard</a></li>
            <li><a href="{{url('cms/menu')}}">Menu</a></li>
            <li><a href="{{url('cms/content')}}">Content</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="{{url('')}}">Back to site</a></li>
            <li><a href="{{url('user/logout')}}">Logout</a></li>
          </ul>
         
        </div>
          @if($errors->any())

            <div class="row ">
                <br><br>
                <div class="col-md-10 pull-right">
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all()as $errors)
                            <li>{{$errors}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div> 
            </div>

            @endif

            @if(Session::has('sm'))

            <div class="row sm-msg">
                <br><br>
                <div class="col-md-10 pull-right">
                    <div class="alert alert-success" role="alert">{{Session::get('sm')}}</div>
                </div>  
            </div>
            @endif
        @yield('cms_content')
      </div>
    </div>
        <script> CKEDITOR.replace('editor1');</script>
        <script type="text/javascript" src="{{asset('libraries/jquery/jquery-1.12.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('libraries/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    </body>
</html>

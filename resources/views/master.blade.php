<html>
    <head>
        <title>{{ $title }}</title>
        <script> var BASE_URL = "{{url('')}}/"</script>

        <link rel="stylesheet" type="text/css" href="{{ asset('libraries/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('libraries/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('')}}">Exo Gaming</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        @if($menu)

                        @foreach($menu as $row)
                        <li><a href="{{$row['url']}}">{{$row['link']}}</a></li>
                        @endforeach


                        @endif

                        <li><a href="{{url('shop')}}">Shop</a></li>

                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        @if($total_cart = Cart::getTotalQuantity())
                        <li><a href="{{url('shop/checkout')}}">
                                <img border="0" width="20" src="{{asset('images/shopping-cart.png')}}">
                                <div class="total-q">{{$total_cart}}</div>
                            </a>
                        </li>
                        @endif

                        @if(!Session::has('user_id'))
                        <li><a href="{{url('user/signin')}}">Signin</a></li>
                        <li><a href="{{url('user/signup')}}">Signup</a></li>

                        @else
                        <li><a href="#">Welcome, {{Session::get('user_name')}}</li></a>
                        @if(Session::has('is_admin'))
                        <li><a href="{{url('cms/dashboard')}}">CMS DASHBOARD</a></li>
                        @endif
                        <li><a href="{{url('user/logout')}}">Logout</a></li>

                        @endif

                    </ul>
                </div>
            </div>
        </nav><br><br><br>

        <div class="container"><br>

            @if($errors->any())

            <div class="row">
                <div class="col-md-12">
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
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">{{Session::get('sm')}}</div>
                </div>  
            </div>
            @endif


            @yield('content')
        </div>
        <br><br><br>
        

        <nav class="navbar navbar-inverse navbar-fixed-bottom">


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center" style="color:  #777; margin-top:10px;">Exo Gaming &COPY; {{date('Y')}}</p>
                    </div>
                </div>
            </div>

        </nav>


        <script type="text/javascript" src="{{asset('libraries/jquery/jquery-1.12.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('libraries/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    </body>
</html>

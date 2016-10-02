
@extends('master')

@section('content')

<div class="row">

    <div class="jumbotron">
        <h1>Welcome Home</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="{{url('user/signup')}}" role="button">Sign up today</a></p>
    </div>

    <div class="row marketing">
        <div class="col-md-6">
            <div class="row">
                <div class=" col-md-4">
                    <div class="thumbnail" style="width: 300;height: 400;">
                        <img src="{{asset('images/action_games_cat.jpg')}}" alt="...">
                        <div class="caption">
                            <h3>Action Games</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo,</p>
                            <p><a href="{{url('shop/action-games')}}" class="btn btn-primary" role="button">check it out!</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-md-6 pull-right ">


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 400;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('images/Command-and-Conquer-3.jpg')}}" alt="cac" style="width: 400; height: 600;">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('images/battlefield1.jpg')}}" alt="battlefild" style="width:400; height: 600;">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('images/grid.jpg')}}" alt="grid" style="width:400; height: 600;">
                        <div class="carousel-caption">

                        </div>
                    </div>


                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
          <div class="col-md-6">
            <div class="row">
                <div class=" col-md-4 ">
                    <div class="thumbnail"style="width: 300;height: 400;">
                        <img src="{{asset('images/strategy_games_cat.jpg')}}" alt="...">
                        <div class="caption">
                            <h3>Strategy Games</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo,</p>
                            <p><a href="{{url('shop/strategy-games')}}" class="btn btn-primary" role="button">check it out!</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>




</div>
















@endsection




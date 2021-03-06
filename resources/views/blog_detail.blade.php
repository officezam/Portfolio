<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative Portfolio </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/creative.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/full-slider.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ asset('/') }}#page-top"><img src="{{ asset('img/front_logo.png') }}" style="width: 30%;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link js-scroll-trigger" href="#about">About</a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ asset('/') }}#page-top">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ asset('/') }}#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ asset('/') }}#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ asset('/') }}#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Content -->
<section id="blog">
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{ $blogData->title }}</h1>

                <!-- Author -->
                {{--<p class="lead">--}}
                {{--by--}}
                {{--<a href="#">Start Bootstrap</a>--}}
                {{--</p>--}}

                <hr>

                {{--<!-- Date/Time -->--}}
                {{--<p>Posted on January 1, 2017 at 12:00 PM</p>--}}

                {{--<hr>--}}

            <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{ asset('blog/fullsize/'.$blogData->icon) }}" alt="{{ $blogData->title }}">

                <hr>

                <!-- Post Content -->
                {{--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>--}}

                {!! $blogData->description !!}

                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>--}}

                {{--<blockquote class="blockquote">--}}
                {{--<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>--}}
                {{--<footer class="blockquote-footer">Someone famous in--}}
                {{--<cite title="Source Title">Source Title</cite>--}}
                {{--</footer>--}}
                {{--</blockquote>--}}

                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>--}}

                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>--}}

                {{--<hr>--}}

                {{--<!-- Comments Form -->--}}
                {{--<div class="card my-4">--}}
                {{--<h5 class="card-header">Leave a Comment:</h5>--}}
                {{--<div class="card-body">--}}
                {{--<form>--}}
                {{--<div class="form-group">--}}
                {{--<textarea class="form-control" rows="3"></textarea>--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Comment -->--}}
                {{--<div class="media mb-4">--}}
                {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
                {{--<div class="media-body">--}}
                {{--<h5 class="mt-0">Commenter Name</h5>--}}
                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Comment with nested comments -->--}}
                {{--<div class="media mb-4">--}}
                {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
                {{--<div class="media-body">--}}
                {{--<h5 class="mt-0">Commenter Name</h5>--}}
                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}

                {{--<div class="media mt-4">--}}
                {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
                {{--<div class="media-body">--}}
                {{--<h5 class="mt-0">Commenter Name</h5>--}}
                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="media mt-4">--}}
                {{--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
                {{--<div class="media-body">--}}
                {{--<h5 class="mt-0">Commenter Name</h5>--}}
                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Recent Posts</h5>
                    <div class="card-body">

                        <div class="row">
                            @foreach($recentBlog as $data)
                                <div class="col-md-6 p-3">
                                    <div class="card">
                                        <a href="{{ url('/blogs/' . $data->id . '/'.str_replace(' ', '-', $data->title)) }}"><img class="card-img-top" src="{{ asset('blog/sidebar/'.$data->icon) }}" alt="{{ $data->title }}"></a>
                                        <div class="card-body">
                                            <h4 class="small">
                                                <a href="{{ url('/blogs/' . $data->id . '/'.str_replace(' ', '-', $data->title)) }}">{{ $data->title }}</a>
                                            </h4>
                                            {{--<p class="card-text">Lorem ipsum d</p>--}}
                                        </div>
                                        {{--<div class="card-footer">--}}
                                        {{--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- /.container -->
</section>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/creative.min.js')}}"></script>

</body>

</html>

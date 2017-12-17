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
    {{--    <link href="{{ asset('css/full-slider.css')}}" rel="stylesheet">--}}

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

        {{--<div class="col-lg-3">--}}

        {{--<h1 class="my-4">Shop Name</h1>--}}
        {{--<div class="list-group">--}}
        {{--<a href="#" class="list-group-item">Category 1</a>--}}
        {{--<a href="#" class="list-group-item">Category 2</a>--}}
        {{--<a href="#" class="list-group-item">Category 3</a>--}}
        {{--</div>--}}

        {{--</div>--}}
        <!-- /.col-lg-3 -->

            <div class="col-lg-12">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{ asset('blog/slider/1.png') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('blog/slider/2.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('blog/slider/3.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    @foreach($blogData as $data)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="{{ url('/blogs/' . $data->id . '/'.str_replace(' ', '-', $data->title)) }}"><img class="card-img-top" src="{{ asset('blog/thumbnail/'.$data->icon) }}" alt="{{ $data->title }}"></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ url('/blogs/' . $data->id . '/'.str_replace(' ', '-', $data->title)) }}">{{ $data->title }}</a>
                                    </h4>
                                    <p class="card-text">{{ $data->short_desc }}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /.row -->
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-9 -->

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

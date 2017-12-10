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
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('img/front_logo.png') }}" style="width: 30%;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link js-scroll-trigger" href="#about">About</a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ asset('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
	        <?php $sum=0; ?>
        @foreach ( $sliders as $slide )
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ ++$sum }}" @if($counter==0) class="active" @endif></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            @foreach ( $sliders as $slide )
                <div class="carousel-item @if($counter==0) active @endif" style="background-image: url('{{ asset('slider/'.$slide->image) }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>{{$slide->title}}</h3>
                        <p>{{$slide->description }}</p>
                    </div>
                </div>
                <?php ++$counter ?>
            @endforeach

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
</header>

{{--<header class="masthead text-center text-white d-flex">--}}
{{--<div class="container my-auto">--}}
{{--<div class="row">--}}
{{--<div class="col-lg-10 mx-auto">--}}
{{--<h1 class="text-uppercase">--}}
{{--<strong>Your Favorite Source of Free Bootstrap Themes</strong>--}}
{{--</h1>--}}
{{--<hr>--}}
{{--</div>--}}
{{--<div class="col-lg-8 mx-auto">--}}
{{--<p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>--}}
{{--<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</header>--}}

{{--<section class="bg-primary" id="about">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto text-center">--}}
                {{--<h2 class="section-heading text-white">We've got what you need!</h2>--}}
                {{--<hr class="light my-4">--}}
                {{--<p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>--}}
                {{--<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x {{ $service->icon }} text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">{{ $service->title }}</h3>
                    <p class="text-muted mb-0">{{ $service->short_desc }}</p>
                </div>
                <button class="btn btn-primary">Download proposal</button>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="p-0" id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            @foreach($portfolio as $value)
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="portfolio/fullsize/{{$value->icon}}">
                    <img class="img-fluid" src="portfolio/thumbnail/{{$value->icon}}" alt="{{ $value->title }}">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            {{--<div class="project-category text-faded">--}}
                                {{--Category--}}
                            {{--</div>--}}
                            <div class="project-name">
                                {{ $value->title }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">--}}
                    {{--<img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">--}}
                    {{--<div class="portfolio-box-caption">--}}
                        {{--<div class="portfolio-box-caption-content">--}}
                            {{--<div class="project-category text-faded">--}}
                                {{--Category--}}
                            {{--</div>--}}
                            {{--<div class="project-name">--}}
                                {{--Project Name--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">--}}
                    {{--<img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">--}}
                    {{--<div class="portfolio-box-caption">--}}
                        {{--<div class="portfolio-box-caption-content">--}}
                            {{--<div class="project-category text-faded">--}}
                                {{--Category--}}
                            {{--</div>--}}
                            {{--<div class="project-name">--}}
                                {{--Project Name--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">--}}
                    {{--<img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">--}}
                    {{--<div class="portfolio-box-caption">--}}
                        {{--<div class="portfolio-box-caption-content">--}}
                            {{--<div class="project-category text-faded">--}}
                                {{--Category--}}
                            {{--</div>--}}
                            {{--<div class="project-name">--}}
                                {{--Project Name--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">--}}
                    {{--<img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">--}}
                    {{--<div class="portfolio-box-caption">--}}
                        {{--<div class="portfolio-box-caption-content">--}}
                            {{--<div class="project-category text-faded">--}}
                                {{--Category--}}
                            {{--</div>--}}
                            {{--<div class="project-name">--}}
                                {{--Project Name--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">--}}
                    {{--<img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">--}}
                    {{--<div class="portfolio-box-caption">--}}
                        {{--<div class="portfolio-box-caption-content">--}}
                            {{--<div class="project-category text-faded">--}}
                                {{--Category--}}
                            {{--</div>--}}
                            {{--<div class="project-name">--}}
                                {{--Project Name--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
    </div>
</section>

{{--<section class="bg-dark text-white">--}}
    {{--<div class="container text-center">--}}
        {{--<h2 class="mb-4">Free Download at Start Bootstrap!</h2>--}}
        {{--<a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
                </p>
            </div>
        </div>
    </div>
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

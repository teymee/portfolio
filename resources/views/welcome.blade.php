<!DOCTYPE>

<html>

<head>

    <title>Nuel||Portfolio</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affordable web design">
    <meta name="keyword" content="web design">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--    <link rel="stylesheet" href="fixed.css">-->


</head>

<body>

<header id="header">
    <div class="row">

        {{--SOCIALS--}}
        <div class="col-1 position-relative">

            <div class="sidebar position-fixed">
                <div class="socials ">
                    <a href=""><i class="fab fa-github "></i></a>
                    <a href=""><i class="fab fa-facebook-f "></i></a>
                    <a href=""><i class="fab fa-instagram "></i></a>
                    <a href=""><i class="fab fa-twitter "></i></a>
                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="container">


                {{-- NAVBAR--}}
                <nav data-aos="fade-down" class="navbar fixed-top navbar-expand-lg navbar-dark ">
                    <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="logo" height="50">
                        NUEL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            {{--                        <button class="button  " type="submit">Search</button>--}}
                        </ul>
                        {{--                <form class="form-inline my-2 my-lg-0">--}}
                        {{--                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                        {{--                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                        {{--                </form>--}}
                    </div>
                </nav>


                {{-- SHOWCASE--}}
                <div class="showcase " >
                    <div class="row">
                        <div class="col-md-6 " data-aos="zoom-in">
{{--                            <div class=" table1 position-relative">--}}
{{--                                <h1> <strong>Hi</strong> </h1> <hr>--}}

{{--                            </div>--}}
                            <h2 class="heading"> <strong>Hi I'm <span id="typed"></span></strong> </h2>

                            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque culpa iustoi</p>
                        </div>
                        <div class="col-md-6 " data-aos="fade-left">
                            <img class="img-fluid" src="{{asset('images/me1 (2).svg')}}" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br>

    <div class="d-flex justify-content-center">
        <span style="color: #BD11FA" class="hero__scroll animate__animated animate__fadeInUp animate__infinite  animate__slower" data-aos="fade-up"   data-aos-once="true" data-aos-easing="ease" data-aos-delay="800">
{{--				<i class="fas fa-caret-down fa-3x " ></i>--}}
            <i class="fas fa-angle-down fa-3x"></i>
			</span>

    </div>

</header>


<div class="d-flex flex-row justify-content-start" style="margin-top: 10%;"   data-aos="fade-up">
    <div class="d-flex flex-column">

        <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid" height="100" width="100">

    </div>
</div>


{{--BOXES--}}
<div id="about " class="experiment animated " data-aos="fade-up" >
    <div class="container">
        <div class="row ">
            <div class="col-xl-5 middle-text">
                <h2><strong>We've partnered with awesome folks</strong></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit. Animi,
                    atque eaque eius esse et harum inventore ipsam nam necessitatibus nemo pariatur provident.</p>

                <button class="button1">All Features</button>
                {{--                    <img class="img-fluid" src="{{asset('images/about.svg')}}" alt="logo" >--}}
            </div>

            <div class="col-xl-7 pl-5 boxes">
                <div class="box">
                    <div class="upper"></div>
                    <div class="middle">
                        <i class="far fa-lightbulb fa-2x"></i>
                    </div>
                    <div class="bottom">
                        <h5><strong>Customize</strong></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, nesciunt!</p>
                    </div>
                </div>
                <div class="box second">
                    <div class="upper"></div>
                    <div class="middle">
                        <i class="fas fa-laptop fa-2x"></i>
                    </div>
                    <div class="bottom">
                        <h5><strong>Customize</strong></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, nesciunt!</p>
                    </div>
                </div>
                <div class="box third ">
                    <div class="upper"></div>
                    <div class="middle">
                        <i class="fas fa-mobile-alt fa-2x"></i>
                    </div>
                    <div class="bottom">
                        <h5><strong>Customize</strong></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, nesciunt!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{{--SQUARE--}}
<div class="d-flex flex-row justify-content-end " style="margin-top: 10%;" data-aos="flip-up">
    <div class="d-flex flex-column">
        <img src="{{asset('images/square.png')}}" alt="" class="img-fluid imgs" height="100" width="150">
    </div>
</div>


{{-- PROGRSS--}}

<div class="bars" data-aos="flip-up" >
    <div class="container">
        <div class=" d-flex flex-row flex-wrap justify-content-between row">

            <div class=" d-flex flex-column col-md-5">
                <img src="{{asset('images/me3.svg')}}" alt="" class="img-fluid">
            </div>

            <div class=" d-flex flex-column col-md-6 about-text">
                <h6 class="heading"> <strong>ABOUT ME</strong></h6>
                <h4 class="heading"> <strong>I'm Okorie Emmanuel & <span id="typed_2"></span> </strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis laudantium libero
                    molestias quam! Animi aspernatur consequatur culpa dolore, facilis reiciendis.</p>

                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>HTML/CSS</p>
                        </div>
                        <div class="d-flex flex-column">
                            <p>95%</p>
                        </div>
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>

                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>PHP</p>
                        </div>
                        <div class="d-flex flex-column">
                            <p>75%</p>
                        </div>
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>
                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>Laravel</p>
                        </div>
                        <div class="d-flex flex-column">
                            <p>80%</p>
                        </div>
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>
                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>Reactjs</p>
                        </div>
                        <div class="d-flex flex-column">
                            <p>25%</p>
                        </div>
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

{{--GET IN TOUCH--}}

<div class="container  get-in-touch "  data-aos="zoom-in">

    <div class="row d-flex justify-content-between " >
        <div class="col-md-6 ">
            <img src="{{asset('images/circle.png')}}" alt="" class="img-fluid imgs" height="100" width="200">
        </div>

        <div class="col-md-6 about-text">
            <h4 style="color: ghostwhite" class="my-3"><strong>GET IN TOUCH</strong></h4>

            <form action="" method="post" style="width: 100%" >
                <div class="row" style="margin-bottom: 500px">
                    <div class="col">
                        <label style="margin-right: 90px">
                            <input  type="text" >
                            <span style="color: grey">Name</span>
                        </label>

                    </div>

                    <div class="space"></div>
                    <div class="col">
                        <label>
                            <input  type="email" >
                            <span style="color: grey">Email</span>
                        </label>
{{--                        <label for="">Email</label>--}}
{{--                        <input  type="email" class="form-control">--}}
                    </div>

                </div>
                <br>
                <div class="position-absolute textarea1" style="top: 120px; width: 100%">
                    <label >
                        <textarea name="" id="" cols="10" rows="2" class="my-5 form-control"></textarea>
                        <span style="color: grey">Message</span>
                    </label>
                </div>

                <button class="button1" role="submit"> Say Hello! </button>

            </form>
        </div>
    </div>
</div>

<footer>
    <div class="container ">
        <div class="row">
            <div class="col-sm-3 d-flex justify-content-center">
                <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="logo" height="50">NUEL
                </a>
            </div>

            <div class="col-sm-7 d-flex justify-content-center ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                    eaque eius esse et harum inventore ipsam  nam necessitatibus nemo pariatur provident.</p>
            </div>

            <div class="col-sm-2 d-flex justify-content-center">
                <p>Copyright &copy;2020 </p>
            </div>



        </div>
    </div>

</footer>




{{--    <div class="progress" style="height: 100vh">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <img src="{{asset('images/logo.png')}}" alt="" height="200">--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <img src="{{asset('images/me2.svg')}}" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


<script src="{{ asset('js/app.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('typed/typed.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('aos.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration:2000,

    });

</script>
<script>
    hljs.initHighlightingOnLoad();

    $('.hero__scroll').on('click', function(e) {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1200);
    });
</script>
</body>


</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}

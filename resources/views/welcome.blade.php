<!DOCTYPE>

<html>

<head>

    <title>Teymee | Portfolio</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Teymee's Portfolio">
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

<body style="overflow-x:hidden !important;">

{{--PRE-LOADER--}}

<div class="loader_bg">
    <div class="loader"></div>
</div>



<header id="header" style="overflow-x:hidden !important;">

    @if(session()->has('session_message'))
        <div class="d-flex justify-content-center" data-aos="fade-in">
            <div class="alert alert-success text-center success-alert  col-12" >
                <p class="text-center">{{session()->get('session_message')}}</p>
            </div>
        </div>

    @endif


                                                {{-- NAV-BAR--}}
        <div class= "nav-bar fixed-top">
            <div class="fixed">
                <div class="logo">

                    <a class="navbar-brand " href="#" >
            <span class="teymee" style="">
                              <p style="font-family: 'Pacifico', cursive; color: ghostwhite"> TEY<span style="color: #BD11FA; ">MEE</span></p>
                           </span>
                    </a>
                </div>
                <button class="toggle-button" id="toggle-button" ><span id="toggle-bar" class="fas fa-bars fa-2x"></span></button>
                <div class="nav-list" id="nav-list">
                    <ul class="">

                        <li class="nav-item1 " >
                            <a class="nav-link" href="#header" style="color: ghostwhite">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" href="#aboutt">About</a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                        @auth()
                            <li class="nav-item">
                                <a class="nav-link" href="#messages">Messages</a>
                            </li>

                            <li class="nav-item dropdown" style="list-style: none;">
                                <a  style="color: ghostwhite" class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Welcome  {{ucwords(strtolower(auth()->user()->name))}}</a>

                                <div class="dropdown-menu" aria-labelledby="dropdown04" >
                                    <form action="/logout" method="post" >
                                        @csrf
                                        @method('POST')
                                        <div class="container">
                                            <button  role="submit" style=" cursor:pointer; border: none; background-color: transparent; color: black; text-align: center; font-size: 13px">
                                                <span class="menu-title">Logout</span>
                                            </button>
                                        </div>
                                    </form>


                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>

        </div>


    <div class="row">

{{--        SOCIALS--}}
        <div class="col-1 position-relative">

            <div class="sidebar position-fixed">
                <div class="socials ">
                    <a href="https://github.com/teymee" target="_blank" style="z-index: 9999;"><i class="fab fa-github "></i></a>

                    <a href="https://www.instagram.com/jst_nuel/"><i class="fab fa-instagram " target="_blank" style="z-index: 9999;"></i></a>
                    <a href="https://twitter.com/_teymee?s=09" target="_blank" style="z-index: 9999;"><i class="fab fa-twitter "></i></a>
                </div>
            </div>

        </div>
        <div class="col-10">
            <div class="container">





{{--                 NAVBAR--}}
{{--                <nav  data-aos="fade-down" class="navbar fixed-top navbar-expand-lg navbar-dark ">--}}
{{--                    <a class="navbar-brand position-relative" href="#" >--}}
{{--                        <img  class="teymee-image" src="{{asset('images/logo.png')}}" alt="logo" height="80">--}}

{{--                           <span class="teymee" style=" padding-left:50px; position:absolute; left:50%; top:35%; font-size:20px;">--}}
{{--                              <p style="font-family: 'Pacifico', cursive;"> TEY<span style="color: #BD11FA; ">MEE</span></p>--}}
{{--                           </span>--}}
{{--                       </a>--}}
{{--                    <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse"--}}
{{--                            data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent"--}}
{{--                            aria-expanded="false" aria-label="Toggle navigation" style="z-index: 9999">--}}
{{--                        <span class="navbar-toggler-icon"></span>--}}
{{--                    </button>--}}

{{--                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">--}}
{{--                        <ul class="navbar-nav ml-auto ">--}}
{{--                            <li class=" {{request()->is('/') || request()->is('#header') ? "nav-item active" :" "}}">--}}
{{--                                <a class="nav-link" href="#header">Home <span class="sr-only">(current)</span></a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="#services">Services</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="#aboutt">About</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="#portfolio">Portfolio</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="#contact">Contact</a>--}}
{{--                            </li>--}}

{{--                            @auth()--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="#messages">Messages</a>--}}
{{--                                </li>--}}

{{--                                <li class="nav-item dropdown" style="list-style: none;">--}}
{{--                                    <a  style="color: ghostwhite" class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"--}}
{{--                                        aria-haspopup="true" aria-expanded="false">Welcome  {{ucwords(strtolower(auth()->user()->name))}}</a>--}}

{{--                                    <div class="dropdown-menu" aria-labelledby="dropdown04" >--}}
{{--                                        <form action="/logout" method="post" >--}}
{{--                                            @csrf--}}
{{--                                            @method('POST')--}}
{{--                                            <div class="container">--}}
{{--                                                <button  role="submit" style=" cursor:pointer; border: none; background-color: transparent; color: black; text-align: center; font-size: 13px">--}}
{{--                                                    <span class="menu-title">Logout</span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}


{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            @endauth--}}
{{--                        </ul>--}}

{{--                    </div>--}}
{{--                </nav>--}}



{{--                 SHOWCASE--}}
                <div class="showcase " >
                    <div class="row">
                        <div class="col-md-6 " data-aos="zoom-in">
                            <h1 class="heading"> <strong>LET'S BUILD SOMETHING <br>
                                    <span id="typed"></span></strong> </h1>
                        </div>
                        <div class="col-md-6 " data-aos="fade-right" >
                            <img class="img-fluid" src="{{asset('images/me1 (2).svg')}}" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br>

    <div class="d-flex justify-content-center">
        <span style="color: #BD11FA" class="hero__scroll animate__animated animate__fadeInUp animate__infinite  animate__slower"
              data-aos="fade-up"   data-aos-once="true" data-aos-easing="ease" data-aos-delay="800">
            <i class="fas fa-angle-down fa-3x"></i>
			</span>

    </div>

</header>


<div class="d-flex flex-row justify-content-start" style="margin-top: 10%;"   data-aos="fade-up">
    <div class="d-flex flex-column">

        <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid " height="100" width="50">

    </div>
</div>



{{--BOXES--}}
<div id="services"  style="overflow: hidden">
    <div id="about" class="experiment animated "  >
        <div class="container">
            <div class="row " >
                <div class="col-xl-5 middle-text" data-aos="fade-up">
                    <h5><strong>Partnering with Agencies, start-ups and small businesses to achieve high quality mobile platforms with
                            exceptional user experience </strong></h5>
                    <p>Ranging from fullstack web development to UI/UX to Performance, SEO, &
                        accessibility testing</p>

                    <button class="button1">All Features</button>

                </div>

                <div class="col-xl-7 pl-5 boxes" data-aos="flip-left"
                     data-aos-easing="ease-out-cubic"
                     data-aos-duration="2000">
                    <div class="box">
                        <div class="upper"></div>
                        <div class="middle">
                            <i class="far fa-lightbulb fa-2x"></i>

                        </div>
                        <div class="bottom">
                            <h5><strong>UI/UX Design</strong></h5>
                            <p>Beautifully handcrafted designs built using the latest technologies that engage your audience.</p>
                        </div>

                    </div>
                    <div class="box second">
                        <div class="upper"></div>
                        <div class="middle">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <div class="bottom">
                            <h5><strong>Performance, SEO, &
                                    accessibility testing</strong></h5>
                            <p>Make your website fast, easy to find, and reach the widest audience possible.</p>
                        </div>
                    </div>
                    <div class="box third " style="margin-bottom: 5px">
                        <div class="upper"></div>
                        <div class="middle">
                            <i class="fas fa-laptop fa-2x"></i>
                        </div>
                        <div class="bottom">
                            <h5><strong>Web Development</strong></h5>
                            <p>Website Creation for your businesses or platforms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


{{--SQUARE--}}
<div id="aboutt" class="d-flex flex-row justify-content-end " style="margin-top: 10%;" data-aos="flip-up">
    <div class="d-flex flex-column">
        <img src="{{asset('images/square.png')}}" alt="" class="img-fluid imgs" height="100" width="150">
    </div>
</div>


{{-- PROGRSS--}}

<div class="bars"  data-aos="flip-up" >
    <div class="container">
        <div class=" d-flex flex-row flex-wrap justify-content-between row">

            <div class=" d-flex flex-column col-md-5">
                <img src="{{asset('images/me3.svg')}}" alt="" class="img-fluid">
            </div>

            <div class=" d-flex flex-column col-md-6 about-text">
                <h6 class="heading"> <strong>ABOUT ME</strong></h6>
                <h4 class="heading "> <strong>I'm Okorie Emmanuel & a <span id="typed_2"></span> </strong></h4>
                <p class="real">A Goal-oriented Fullstack Web Developer, who brings strong commitment to collaboration
                    and problem-solving
                    with the use of various web design packages to develop custom-crafted, customer-focused websites and designs.
                    Committed to high standards of user experience, usability and speed for clients platforms and ideas.
                    <br>
                    Below are my current versatilities and progress..</p>

                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>HTML/CSS</p>
                        </div>
{{--                        <div class="d-flex flex-column">--}}
{{--                            <p>95%</p>--}}
{{--                        </div>--}}
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>

                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>Javascript</p>
                        </div>
                        {{--                        <div class="d-flex flex-column">--}}
                        {{--                            <p>95%</p>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>

                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>Reactjs</p>
                        </div>
                        {{--                        <div class="d-flex flex-column">--}}
                        {{--                            <p>25%</p>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>

                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>PHP</p>
                        </div>
                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>
                <div class="bar-section">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-column">
                            <p>Laravel</p>
                        </div>

                    </div>
                    <div class="progress" style="height: 3px;">

                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                </div>


            </div>

        </div>

    </div>
</div>

{{--RECENT WORKS--}}

<div class="recent-works" id="portfolio">
    <h2 class="d-flex justify-content-center"> <strong>RECENT WORKS</strong></h2>
    <div class="container">
        <div class="row ovate" data-aos="fade-left">
            <div class="col-md-6 text-area  justify-content-center" >
                <h5 class=" justify-content-center"> <strong>Ovate Agro</strong> </h5>

                <div>
                    <p>A growing Agricultural Company of  professionals passionate about food security & nature preservation in the world</p>
                </div>

            </div>
            <div class="col-md-6 ">
                <img src="images/ovate.png" alt="" class="img-fluid" >
            </div>
        </div>

        <div class="row" data-aos="fade-right">
            <div class="col-md-6">
                <img src="images/chirlin2.png" alt="" width="100%" >
            </div>
            <div class="col-md-6 text-area  justify-content-center">
                <h5><strong>Chirlin Collections</strong></h5>
                <p>An Ecommerce website for an Interior Design Company</p>
            </div>

        </div>

        <div class="row ovate" data-aos="fade-left">

            <div class="col-md-6 text-area  justify-content-center" >
                <h5 class=" justify-content-center"> <a href="https://nuelflix.000webhostapp.com/" target="_blank"><strong>Nuelflix</strong></a></h5>

                <div>
                    <p><a href="https://nuelflix.000webhostapp.com/" target="_blank">A parody of Netflix website  </a></p>
                </div>

            </div>

            <div class="col-md-6 ">
                <a href="https://nuelflix.000webhostapp.com/" target="_blank">
                <img src="images/nuelflixx.png" alt="" class="img-fluid" >
                </a>
            </div>
        </div>
    </div>

</div>

{{--GET IN TOUCH--}}

<div class="container  get-in-touch" id="contact" data-aos="zoom-in">

    <div class="row d-flex justify-content-between " >
        <div class="col-md-6 ">
            <img src="{{asset('images/circle.png')}}" alt="" class="img-fluid imgs" height="100" width="200">
        </div>

        <div class="col-md-6 about-text">
            <h4 style="color: ghostwhite" class="my-3"><strong>BOOK AN APPOINTMENT</strong></h4>

            <form action="/message" method="post" style="width: 100%" >
                @csrf
                <div class="row" style="margin-bottom: 500px">
                    <div class="col">
                        <label style="margin-right: 90px">
                            <input  type="text" name="name" autofill="disable">
                            <span style="color: grey">Name</span>
                        </label>
                        @error('name')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="space"></div>
                    <div class="col">
                        <label>
                            <input  type="email" name="email" autofill="disable">
                            <span style="color: grey">Email</span>
                        </label>
{{--                        <label for="">Email</label>--}}
{{--                        <input  type="email" class="form-control">--}}
                        @error('email')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>

                </div>
                <br>
                <div class="position-absolute textarea1" style="top: 120px; width: 100%">
                    <label >
                        <textarea id="" cols="10" rows="2" class="my-5 form-control" name="message"></textarea>

                        <span style="color: grey">Message</span>
                        @error('message')
                        <p style="color:red; position:absolute; top:0px;">{{$message}}</p>
                        @enderror
                    </label>

                </div>


                <button class="button1" role="submit"> Say Hello! </button>

            </form>
            <a href="mailto:teymee17@gmail.com" class="mail-to">   <button class="button1" role="submit"> Send a direct mail </button></a>
        </div>
    </div>
</div>

@auth()

    @if($inboxes->count() > 0)
<div class="table-responsive" id="messages">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Total({{$inboxes->count()}})</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col" colspan="3">Message</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inboxes as $inbox)
        <tr>
            <th scope="row"></th>
            <td>{{$inbox->name}}</td>
            <td>{{$inbox->email}}</td>
            <td>{{$inbox->message}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $inboxes->render() !!}
    </div>

</div>
    @endif
@endauth

<footer >
    <div class="container1" >
        <div class="row text-center" >

                <div class=" col-12" >
                    <a style="color: ghostwhite" class="navbar-brand" href="#">


                        <span  class="teymee" >
                              <p style="font-family: 'Pacifico', cursive;"> TEY<span style="color: #BD11FA; ">MEE</span> </p>
                           </span>
                    </a>


            </div>


            <div class=" copyright col-12" style="font-size: 15" >
                <p> <strong>Teymee17@gmail.com</strong> </p>
                <div class="footer-socials">
                    <a href="https://github.com/teymee" target="_blank" style="z-index: 9999;"><i class="fab fa-github "></i></a>

                    <a href="https://www.instagram.com/jst_nuel/"><i class="fab fa-instagram " target="_blank" style="z-index: 9999;"></i></a>
                    <a href="https://twitter.com/_teymee?s=09" target="_blank" style="z-index: 9999;"><i class="fab fa-twitter "></i></a>
                </div>
            </div>



        </div>
    </div>



</footer>

<div class="bubbles ">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
    <img src="images/bubble.png" alt="">
</div>





<script src="/js/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="typed/typed.min.js"></script>
<script src="js/main.js"></script>
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

{{--SCROLLING EFFECT--}}
<script>
    jQuery($ => {
        // The speed of the scroll in milliseconds
        const speed = 1000;

        $('a[href*="#"]')
            .filter((i, a) => a.getAttribute('href').startsWith('#') || a.href.startsWith(`${location.href}#`))
            .unbind('click.smoothScroll')
            .bind('click.smoothScroll', event => {
                const targetId = event.currentTarget.getAttribute('href').split('#')[1];
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    event.preventDefault();
                    $('html, body').animate({ scrollTop: $(targetElement).offset().top }, speed);
                }
            });
    });
</script>

</body>


</html>

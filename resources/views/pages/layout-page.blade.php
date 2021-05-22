<!DOCTYPE html>
<html lang="en">

<head>
    <title>App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="_base_url" content="{{ url('/') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@800&display=swap"
        rel="stylesheet">
    <script src="sweetalert2.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="/">
            <img class="logo" src="/images/img1.png" alt=""> <span>TRANSCRIPTS</span>
        </a>        
      <button style="c" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav> --}}
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="logo" src="/images/img1.png" alt=""> <span>TRANSCRIPTS</span>
            </a>
            <button style="c" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse  justify-content-end nav-item" id="navbarNav">
                <ul class=" nav  navbar-nav">
                    <li class="nav-item {{'/' == request()->path() ? 'active' : '' }} ">
                        <a class="nav-link  selected" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item {{'about-page' == request()->path() ? 'active' : '' }}  ">
                        <a class="nav-link selected" href="/about-page">ABOUT US</a>
                    </li>
                    {{-- @if (Auth::check()) --}}
                        <li class="nav-item {{'apply-page' == request()->path() ? 'active' : '' }}">
                            <a class="nav-link selected" href="/apply-page">APPLY NOW</a>
                        </li>
                    {{-- @else
                        <li class="nav-item">
                            <a class="nav-link selected apply" onclick="onApply()">APPLY NOW</a>
                        </li>
                    @endif --}}

                    <li class="nav-item {{'faq-page' == request()->path() ? 'active' : '' }}">
                        <a class="nav-link selected" href="/faq-page">FAQ's </a>
                    </li>
                    <li class="nav-item {{'contact-page' == request()->path() ? 'active' : '' }} ">
                        <a class="nav-link selected" href="/contact-page">CONTACT</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        @if (!Auth::check())
                            <a href="/register" class="signup-btn selected text-decoration-none my-2 my-sm-0">SIGN UP</a>
                            @else
                            <a href="/user-ongoing-order" class="nav-link selected">DASHBOARD</a>
                        @endif

                    </form>

                </ul>
            </div>
        </div>
    </nav>

    <div class="content login-content">
        @yield('content')
    </div>

    <footer class="align-items-center">

        <div class="row footer-row">
            <div class="col-md-3 col-sm-12 col-12">
                <a class="navbar-brand" href="/">
                    <img class="logo" src="/images/img1.png" alt=""> <span>TRANSCRIPTS</span>
                </a>
                <p>&copy;copyright
                </p>
                <hr style="border-top:3px solid; color:black;">
                <p>
                    Privacy policy Terms and Conditions
                </p>
            </div>
            <div class="col-md-3 col-sm-12 col-12">
                <ul class="list-unstyled">
                    <li> <a href="" class="my-2 color-bl">About Us</a>
                    </li>
                    <li> <a href="" class="my-2 color-bl">Contact </a>
                    </li>
                    <li> <a href="" class="my-2 color-bl">Apply Now </a>
                    </li>
                    <li> <a href="" class="my-2 color-bl">FAQ's</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 col-12">
                <ul class="list-unstyled">
                    <li><i class="fab fa-facebook-f my-2 color-bl"></i> <a href="" class="color-bl">Facebok</a>
                    </li>
                    <li><i class="fab fa-twitter  my-2 color-bl"></i> <a href="" class="color-bl">Twitter</a>
                    </li>
                    <li><i class="fab fa-instagram  my-2 color-bl"></i> <a href="" class="color-bl">Instagram
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-3 col-sm-12 col-12">
                <address>
                    Written by <a href="mailto:webmaster@example.com" class="color-bl">Jon Doe</a>.<br>
                    Visit us at:<br>
                    Example.com<br>
                    Box 564, Disneyland<br>
                    USA
                </address>
            </div>



<script>
                function onApply() {
                    alert('Login First');
                    window.location.href = "/signup";
                }

            </script>

    </footer>
</body>


</html>

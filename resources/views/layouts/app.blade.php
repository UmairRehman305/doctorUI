<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


 <!-- Vendor JS Files -->
 <script src="vendor/aos/aos.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/php-email-form/validate.js"></script>
<script src="vendor/purecounter/purecounter.js"></script> 
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="js/main.js"></script>

<!-- Template Main CSS File -->
<link href="css/style.css" rel="stylesheet">



</head>
<body>
    <div id="app">
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">

                <h1 class="logo"><a  href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }} <span>.</span></a></h1>

                <nav id="navbar" class="navbar">
                <ul>
                @guest
                    <li><a class="nav-link scrollto" href="/login">Login</a></li>
                    @if (Route::has('register'))
                    <li><a class="nav-link scrollto" href="/register">Sign Up</a></li>
                    @endif
                @else
                    <li>
                        <a href="fill-from">Create Profile</a>
                    </li>
                    <li>
                        <a>My Form</a>
                    </li>
                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul> 
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf</form>
                        </ul>
                    </li>
                @endguest   
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->

            </div>
        </header>

        <main class="py-4">
            @yield('content')
            @yield('register-form-1')
            
        </main>
    </div>
</body>
</html>

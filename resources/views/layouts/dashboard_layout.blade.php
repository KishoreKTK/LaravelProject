<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('images/logo.png') }}" type="image/gif" sizes="16x16">
    <title>{{ config('app.name', 'Laravel') }}</title>

     
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" id="bootstrap-css">
    @yield('pagecss')
</head>

<body class="theme_clr">
    <div class="loader"></div>
    <div class="container p-3">
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('images/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                <strong class="theme_clr">KTK WORKSPACE</strong>
            </a>
            {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
              </ul>
            </div>  --}}
        </nav>
        @if(url()->current() == url('/'))
        <div class="row">
            <div class="col-md-4">
                <h6 class="display-6">WORKSTATION</h6>
            </div>
            <div class="col-md-8">
                <div class="bg-image hover-overlay ripple shadow-custom" data-ripple-color="light">
                    <picture>
                        <img src="{{asset('images/exp_programmer.png')}}" class="img-fluid" width="100%" height="100%" alt="Standard UI Kit">
                    </picture>
                </div>
            </div>
        </div>
        @endif
        @yield('dashboard_section')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('pagescript')
    <script type="text/javascript">
      $("document").ready(function()
      {    
          $(".loader").hide();
      });
    </script>
</body>
</html>

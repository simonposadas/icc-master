<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <!-- Bootstrap Core CSS -->
        <!--        <link href="{{ asset('SB/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">-->
        <link rel='stylesheet' href='{{ asset('bootstrap-3.3.7/dist/css/bootstrap.min.css') }}'>

        <!-- MetisMenu CSS -->
        <!--        <link href="{{ asset('SB/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
        
                 Custom CSS 
                <link href="{{ asset('SB/dist/css/sb-admin-2.css') }}" rel="stylesheet">-->

        <!-- Custom Fonts -->
        <!--        <link href="{{ asset('SB/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">-->
        <link rel='stylesheet' href="{{ asset('fullcalendar/fullcalendar.css') }}" />
        <link rel='stylesheet' href='{{ asset('css/bootstrap-datepicker.min.css') }}'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
        <link href='{{ asset('css/sweetalert.css') }}' rel='stylesheet'>


        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!--        <script src="fullcalendar/lib/jquery.min.js"></script>-->
        <script src="{{ asset('fullcalendar/lib/moment.min.js') }}"></script>
        <script src="{{ asset('fullcalendar/fullcalendar.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

        <style>
            div.next{
                position: absolute;
                right: 5%;
                bottom: 0%;
            }
            div.Details{
                background-color: white;
                padding: 20px;
            }
        </style>

    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Menu</a></li>
                                <!-- Reservation -->
                                <li class="{{ Request::is('reservation') || Request::is('reservation/*') ? "active" : "" }}">
                                    <a href="{{ route('r.index') }}">Reservation</a>
                                </li>
                                <li class='{{ Request::is('credential') || Request::is('credential/*') }}}'>
                                    <a href="{{ route('credential') }}">Check credentials</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script> 
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
</html>
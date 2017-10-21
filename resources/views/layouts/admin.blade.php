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
        <link href="{{ asset('SB/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('SB/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('SB/dist/css/sb-admin-2.css') }}" rel="stylesheet">
        <link href='{{ asset('css/sweetalert.css') }}' rel='stylesheet'>
        <link href='{{ asset('css/bootstrap-select.min.css') }}' rel='stylesheet'>

        <!-- Custom Fonts -->
        <link href="{{ asset('SB/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- jQuery -->
        <script src="{{ asset('SB/vendor/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('SB/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('SB/vendor/metisMenu/metisMenu.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('SB/dist/js/sb-admin-2.js') }}"></script>
        <script src="{{ asset('js/sweetalert.min.js') }}"></script> 
        <script src='{{ asset('js/bootstrap-confirmation.min.js') }}'></script>
        <script src='{{ asset('js/bootstrap-select.min.js') }}'></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin/dashboard">Irmalyn's Catering</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>-->
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!-- dashboard -->
                            <li class='{{ Request::is('admin/dashboard') || Request::is('admin/dashboard/*') ? 'active' : '' }}'>
                                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>

                            <li>
                                <a href="/admin/customer"><i class="fa fa-table fa-fw"></i> Customers</a>
                            </li>
                            <!-- inventory -->
                            <li class='{{ Request::is('admin/inventory') || Request::is('admin/inventory/*') ? 'active' : '' }}'>
                                <a href="{{ route('admin.inventory') }}"><i class="fa fa-table fa-fw"></i> Inventory</a>
                            </li>

                            <!-- reservation -->
                            <li class='{{ Request::is('admin/reservation') || Request::is('admin/reservation/*') ? 'active' : '' }}'>
                                <a href="{{ route('admin.reserv') }}"><i class="fa fa-edit fa-fw"></i> Reservation</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> Maintenance<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/admin/food"> Food</a>
                                    </li>
                                    <li>
                                        <a href="/reservation/New_reservations"> Recipe</a>
                                    </li>
                                    <li>
                                        <a href="/admin/foodtype"> Food Type</a>
                                    </li>
                                    <li>
                                        <a href="/admin/workerrole"> Worker Role</a>
                                    </li>
                                    <li>
                                        <a href="/admin/worker"> Worker</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            @yield('content')
        </div>
        <!-- /#wrapper -->
        @yield('modal')
        <script>
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
        </script>
        <!-- Include this after the sweet alert js file -->
        @include('sweet::alert')
        @yield('script')
    </body>

</html>

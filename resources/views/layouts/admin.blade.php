<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <meta name="description" content="alchemist law">
    <meta name="keywords" content="alchemist law">

    {{-- STYLE --}}
    @stack('prepend-style')
    <link rel="shortcut icon" href="/assets/images/logo-1.png" type="image/x-icon" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/law-icons/font/flaticon.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/font-awesome.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.1.1/b-html5-2.1.1/r-2.2.9/datatables.min.css" />
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/assets/images/logo-1.png" alt="" class="my-4" style="max-width: 150px" />
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ route('admin.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/admin*') ? 'active' : '' }}">Admin</a>
                    <a href="{{ route('header') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/header*') ? 'active' : '' }}">Header</a>
                    <a href="{{ route('about') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/about*') ? 'active' : '' }}">About</a>
                    <a href="{{ route('our-service') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/our-service*') ? 'active' : '' }}">Our
                        Service</a>
                    <a href="{{ route('experience') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/experience*') ? 'active' : '' }}">Experience</a>
                    <a href="{{ route('practicing-area') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/practicing-area*') ? 'active' : '' }}">Practicing
                        Area</a>
                    <a href="{{ route('attorney') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/attorney*') ? 'active' : '' }}">Attorney</a>
                    <a href="{{ route('publication') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/publication*') ? 'active' : '' }}">Publication</a>
                    <a href="{{ route('contact') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/contact*') ? 'active' : '' }}">Contact</a>
                    <a href="{{ route('social-media') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/social-media*') ? 'active' : '' }}">Social
                        Media</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="list-group-item list-group-item-action">Sign Out</a>
                </div>
            </div>
            <!-- Sidebar End -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle"><i
                                class="fa fa-arrow-left"> Menu</i></button>

                        <!-- Membuat menu burger saat layarnya kecil -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- End -->

                        <!-- Desktop Menu -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button"
                                        data-toggle="dropdown">
                                        Hi, {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="dropdown-item">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link">
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('dashboard-muda-indonesia') }}" role="button"><i class="fa fa-refresh" aria-hidden="true"> Switch</i></a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Desktop Menu End -->

                            <!-- Mobile -->
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button"
                                        data-toggle="dropdown"> Hi, {{ Auth::user()->name }} </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="dropdown-item">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link">
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('dashboard-muda-indonesia') }}" role="button"><i class="fa fa-refresh" aria-hidden="true"> Switch</i></a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Mobile End -->
                        </div>
                    </div>
                </nav>
                <!-- Page Content End -->

                {{-- Content --}}
                @yield('content')

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('addon-script')


</body>

</html>

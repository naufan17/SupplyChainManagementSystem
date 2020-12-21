<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/dashboard.css">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

    </head>
    <body class="bg-light">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md sticky-top navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class=" dropdown-item-text">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
         <!-- Sidebar -->
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">
                                    <span data-feather="home"></span>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                    <span>Supplier</span>
                                </h6>             
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/pasokan') }}">
                                    <span data-feather="plus-circle"></span>
                                    Tambah Pasokan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/kirimPasokan') }}">
                                    <span data-feather="truck"></span>
                                    Kirim Pasokan
                                </a>
                            </li>
                            <li>
                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                    <span>Manufaktur</span>
                                </h6>   
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/kiriman') }}">
                                    <span data-feather="package"></span>
                                    Kiriman Pasokan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/stokPasokan') }}">
                                    <span data-feather="clipboard"></span>
                                    Stok Pasokan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/produksi') }}">
                                    <span data-feather="shopping-cart"></span>
                                    Produksi Barang
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/stokBarang') }}">
                                    <span data-feather="clipboard"></span>
                                    Stok Barang
                                </a>
                            </li>
                            <li>
                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                    <span>Distributor</span>
                                </h6>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/pesanan') }}">
                                    <span data-feather="log-in"></span>
                                    Permintaan Pesanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/kirimBarang') }}">
                                    <span data-feather="truck"></span>
                                    Kirim Barang
                                </a>
                            </li>
                            <li>
                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                    <span>Retail</span>
                                </h6>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/permintaan') }}">
                                    <span data-feather="mail"></span>
                                    Kirim Permintaan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/konfirmasi') }}">
                                    <span data-feather="package"></span>
                                    Konfirmasi Pesanan
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('main')
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
        <!-- Optional JavaScript; choose one of the two! -->
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->

    </body>
</html>


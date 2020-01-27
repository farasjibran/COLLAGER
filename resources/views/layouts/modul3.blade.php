<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div id="app">
        <div class="row bungkuscontent">
            <div class="col-md-2 sidebarr1">
                <img src="{{ asset('img/2.png') }}" alt="" class="fotologo">
                <br>

                <!-- menu sidebar -->
                <div class="menu">

                    <!-- menu home -->
                    <div class="menuhom">
                        <a href="{{ route('home')}}" class="home">
                            <img src="{{ asset('img/Path 1.png')}}" alt="">
                            Home
                        </a>
                    </div>
                    <br>

                    <!-- menu dashboard -->
                    <div class="menudash">
                        <a href="{{ route('dashbord')}}" class="dasboard">
                            <img src="{{ asset('img/Path 6.png')}}" alt="">
                            Dashboard
                        </a>
                    </div>
                    <br>

                    <!-- menu kampus -->
                    <div class="menucamp">
                        <a href="{{ route('kampus')}}" class="kampus">
                            <img src="{{ asset('img/Path 8.png')}}" alt="">
                            Kampus
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-10 coll-bg1 contentsmodal">

                <main>
                    <div class="row">
                        <!-- Search -->
                        <div class="col backbttn">
                            <a href="{{ route('dashbord')}}" data-toggle="modal" data-target="#modalmodul"><img src="{{ asset('img/Group 39.png')}}" alt=""></a>
                            <div class="textmodul">
                                <div class="judultext">
                                    <p><b>Test Kemampuan</b></p>
                                </div>
                            </div>
                        </div>
                        <!-- Auth -->
                        <div class="col">
                            <div class="auth">
                                @guest
                                <a class="nav-link navbarauth" href="{{ route('login') }}" style="font-size: 20px;"><b>{{ __('Login') }}</b></a>
                                @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle navbarauth" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdownmenu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </main>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalmodul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatian!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin untuk meninggalkan test?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a href="{{ route('dashbord')}}"> <button type="button" class="btn btn-primary">Next</button></a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
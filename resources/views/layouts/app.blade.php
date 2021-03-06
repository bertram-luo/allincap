<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Allin Cap Administration Backend</title>
        <!--<link rel="stylesheet" href="bootstrap.min.css">-->

        <link href="{{ elixir('assets/css/be-main.css') }}" rel="stylesheet">
        <link href="/assets/css/dashboard.css" rel="stylesheet">
        <link href="/assets/css/libs.css" rel="stylesheet">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

        <!--<link rel="stylesheet" href="styles.css">-->
        <style>
            p
            {
                font-size: 1.5em;
            }
        </style>
        <script src="/assets/js/jquery.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#myScrollspy" style="position: relative;" >
        <a name="top"></a>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Allin Cap</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" >
                        <li>
                            <a href="/news/create" role="button">添加新闻</a>
                        </li>
                        <li>
                            <a href="/news/list" role="button">管理新闻</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="/tasks">tasks</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <!--Hello, {{ Auth::user()->name }} <span class="caret"></span>-->
                                Hello, Master <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        <script src="/assets/js/bootstrap.min.js"></script>
        <!--<script src="/assets/js/application.js"></script>-->
        <script src="{{ elixir('assets/js/libs.js') }}"></script>
        @include('common.flash')
        @yield('scripts.footer')
    </body>
</html>

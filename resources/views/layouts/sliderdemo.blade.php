<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=3, user-scalable=no">
        <title>奥银资本 Allin Captical</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <link href="/assets/css/flexslider.css" rel="stylesheet">

    </head>
    <body class="page home page_loading">
        <div id="wrapper" class="scrollable">
        <header class="change ch">
            <div id="menu_control">
                <div class="open">
                    <i class="bar top"></i>
                    <i class="bar mid"></i>
                    <i class="bar bottom"></i>
                </div>
            </div>

            <div class="logo nav" id="logo_nav">
                <a href="#body">
                    <img src="/assets/images/logo-color.png">  </img>
                </a>
            </div>
            <nav id="main_nav">
                <ul class="">
                    <li><a href="#whoami">关于我们</a></li>
                    <li><a href="#partners">核心团队</a></li>
                    <li><a href="#cases">投资案例</a></li>
                    <li><a href="#news">最新动态</a></li>
                    <li><a href="#contact">联系我们</a></li>
                </ul>
            </nav>
            <div class="lang">
                <a href="">ENGLISH</a>
            </div>
        </header>

        @yield('content')
        </div>
        <div id="floating" style="">
            <div id="phone"></div>
            <div id="location"></div>
            <div id="share"></div>
        </div>
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery.flexslider.min.js"></script>
        <script src="/assets/js/testslider.js"></script>
        @yield('scripts.footer')
    </body>
</html>

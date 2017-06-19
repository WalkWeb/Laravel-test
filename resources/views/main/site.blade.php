<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Студия «Рога и копыта»</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">
        <script src="{{ asset('js/vendor/modernizr-2.6.1-respond-1.1.0.min.js') }}"></script>
    </head>
    <body>
        @yield('header')
        @yield('content')
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                        <span>Студия «Рога и копыта» &copy; Все права пережеваны
                    </div> <!-- /.text-center -->

                </div>
            </div>
        </div>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
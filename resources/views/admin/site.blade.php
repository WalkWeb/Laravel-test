<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Панель администратора - {{ $title }}</title>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>
<body>
<div class="container">
    <div class="header">
        <p><span class="title">Панель администратора</span></p>
    </div>
    <div class="wrapper">
        <div class="main">
            @if(session('status'))
            <div class="infoblock">
                <div class="contentinfoblock">
                    <p>{{ session('status') }}</p>
                </div>
            </div>
            @endif
            @if(count($errors) > 0)
            <div class="errorblock">
                <div class="contentinfoblock">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
                </div>
            </div>
            @endif
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menucontent">
            @yield('menu')
        </div>
    </div>
    <div class="footer">
        <div class="footercontent">
            <p>&copy; 2017 Web-студия «Рога и Копыта»</p>
        </div>
    </div>
</div>
</body>
</html>
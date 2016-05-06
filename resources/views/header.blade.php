<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Поиск отелей и авиабилетов дешево без комиссий на Gofar.by</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://gofar.by/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/font-awesome.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/awe-booking-font.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/owl.carousel.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/magnific-popup.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/jquery-ui.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/settings.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/style.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("styles/demo.css") }}">
    <link id="colorreplace" rel="stylesheet" type="text/css" href="{{ asset("styles/blue.css") }}">
    <!--[if lt IE 9]>
    <script src="{{ asset("javascript/html5.js") }}"></script>
    <script src="{{ asset("javascript/css3-mediaqueries.js") }}"></script>
    <![endif]-->
</head>
<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10">
<![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10">
<![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]>
<!-->
<body>
<!--<![endif]-->
<div id="page-wrap">
    <div class="preloader"></div>
    <header id="header-page">
        <div class="header-page__inner">
            <div class="container">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset("images/logo.png") }}" alt=""></a>
                </div>
                <nav class="navigation awe-navigation" data-responsive="1200">
                    <ul class="menu-list">
                        <li>
                            <a href="{{url('/')}}">Главная</a>
                        </li>
                            <li>
                            @if (!Request::is("/"))
                                <a href="/#hotels" id="hotel-link">Отели</a>
                            @else
                                <a href="#" id="hotel-link">Отели</a>
                            @endif
                        </li>
                        <li class="menu-item-has-children">
                            @if (!Request::is("/"))
                                <a href="/#avias" id="avia-link">Авиабилеты</a>
                                @else
                                <a href="#" id="avia-link">Авиабилеты</a>
                            @endif
                        </li>
                        <li>
                            <a href="{{url('/blog')}}" >Советы путешественникам</a>
                        </li>
                    </ul>
                </nav>
                <a class="toggle-menu-responsive" href="#">
                    <div class="hamburger">
                        <span class="item item-1"></span>
                        <span class="item item-2"></span>
                        <span class="item item-3"></span>
                    </div>
                </a>
            </div>
        </div>
    </header>
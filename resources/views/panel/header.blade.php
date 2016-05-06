<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta section -->
    <title>Gofar - Dashboard</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >

    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon" >
    <!-- ./meta section -->

    <!-- css styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset("panel/css/blue-white.css") }}" id="dev-css">
    <!-- ./css styles -->

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/css/dev-other/dev-ie-fix.css') }}">
    <![endif]-->

    @if (!Request::is("/blog/*"))
        <script type="text/javascript" src="{{ asset("panel/js/plugins/ckeditor/ckeditor.js") }}"></script>
    @endif
    <!-- javascripts -->
    <script type="text/javascript" src="{{ asset("panel/js/plugins/modernizr/modernizr.js") }}"></script>
    <!-- ./javascripts -->

    <style>
        .dev-page{visibility: hidden;}
    </style>
</head>
<body>
<!-- set loading layer -->
<div class="dev-page-loading preloader"></div>
<!-- ./set loading layer -->

<!-- page wrapper -->
<div class="dev-page">

    <!-- page header -->
    <div class="dev-page-header">

        <div class="dph-logo">
            <img src="{{ asset('panel/img/logo.png') }}" style="height: 40px;width: 150px;">
            <a class="dev-page-sidebar-collapse">
                <div class="dev-page-sidebar-collapse-icon">
                    <span class="line-one"></span>
                    <span class="line-two"></span>
                    <span class="line-three"></span>
                </div>
            </a>
        </div>

        <ul class="dph-buttons pull-right">
            <li class="dph-button-stuck">
                <a href="#" class="dev-page-search-toggle">
                    <div class="dev-page-search-toggle-icon">
                        <span class="circle"></span>
                        <span class="line"></span>
                    </div>
                </a>
            </li>
        </ul>

    </div>
    <div class="dev-page-container">
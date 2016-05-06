<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta section -->
    <title>Gofar -  Dashboard</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >

    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon" >
    <!-- /meta section -->

    <!-- css styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/css/blue-white.css') }}" id="dev-css">
    <!-- ./css styles -->

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/css/dev-other/dev-ie-fix.css') }}">
    <![endif]-->

    <!-- javascripts -->
    <script type="text/javascript" src="{{ asset('panel/js/plugins/modernizr/modernizr.js') }}"></script>
    <!-- ./javascripts -->

    <style>.dev-page{visibility: hidden;}</style>
</head>
<body>

<!-- page wrapper -->
<div class="dev-page dev-page-login dev-page-login-v2">

    <div class="dev-page-login-block">
        <img src="{{ asset('panel/img/logo.png') }}" style="height: 100px;width: 300px;">
        <br>
        <br>
        <div class="dev-page-login-block__form">
            <form method="post">
                {!! csrf_field() !!}
                @if (isset($error))
                    <div class="title" style="color:red">Неверный email или пароль</div>
                @endif

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="email" class="form-control" placeholder="email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                    </div>
                </div>
                    <div class="input-group">
                        <input type="checkbox" class="form-control" name="remember" checked style="width: 20px;margin-top: -8px;"> <span style="margin-left: 10px;">Запомнить меня</span>
                    </div>
                <div class="form-group no-border margin-top-20">
                    <button class="btn btn-success btn-block">Вход</button>
                </div>
               <!-- <p><a href="#">Забыли пароль?</a></p>-->
            </form>
        </div>
        <div class="dev-page-login-block__footer">
            © <?php echo date('Y'); ?> <strong>GOFAR.BY</strong>. Все права защищены.
        </div>
    </div>

</div>
<!-- ./page wrapper -->

<!-- javascript -->
<script type="text/javascript" src="{{ asset('panel/js/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('panel/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- ./javascript -->
</body>
</html>







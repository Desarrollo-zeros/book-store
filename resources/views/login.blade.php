<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="es">

<head>
    <title>M-Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="libreria web" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom Theme files -->
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="/css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->


    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="home">
    <!-- header -->
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="main-nav">
            <div class="container">

                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Chronicle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a class="navbar-brand" href="{{url("")}}"><img src="/images/mbook.png"  width="50" style="position: relative; bottom: 15px;" /></a>
                    </h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                    <ul class="nav navbar-nav navbar-left cl-effect-15">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a href="{{url("")}}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{url("/productos")}}">Libros</a>
                        </li>


                        @if(!session()->has("usuario"))
                            <li>
                                <a href="{{url("/login")}}" title="SignIn & SignUp">
                                    <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{url("/usuario/destroy")}}">Cerrar Sesión</a>
                            </li>
                        @endif

                    </ul>
                    <!-- search-bar -->
                    <div class="search-bar-agileits">
                        <div class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li>
                                    <a class="cd-search-trigger" href="#cd-search">
                                        <span></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- cd-header-buttons -->
                        </div>
                        <div id="cd-search" class="cd-search">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Type and Hit Enter...">
                            </form>
                        </div>
                    </div>
                    <!-- //search-bar ends here -->
                    <!-- shopping cart -->
                    <div class="cart-mainf">
                        <div class="chrcart chrcart2 cart cart box_1">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="top_chr_cart" type="submit" name="submit" value="">
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- //shopping cart ends here -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="clearfix"></div>
            </div>
            <!-- /.container -->
        </div>
    </nav>
    <!-- //navbar ends here -->
    <!-- banner -->
    <div class="banner-bg-inner">
        <!-- banner-text -->
        <div class="banner-text-inner">
            <div class="container">
                <h2 class="title-inner">
                    Un mundo para la lectura
                </h2>

            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="crumbs text-center">
        <div class="container">
            <div class="row">
                <ul class="btn-group btn-breadcrumb bc-list">

                </ul>
            </div>
        </div>
    </div>
    <!--//breadcrumbs ends here-->
    <!-- signin and signup form -->
    <div class="login-form section text-center">
        <div class="container">
            <h4 class="rad-txt">
                <span class="abtxt1"><a href="javascript:void(0)" onclick="$('#loginbox').css('display','block');$('#signupbox').css('display','none');">Iniciar Sesíon</a></span>
                <span class="abtext"><a href="javascript:void(0)" onclick="$('#loginbox').css('display','none');$('#signupbox').css('display','block');">Registrarse</a></span>
            </h4>
            <div id="loginbox" style="margin-top:30px;" class="mainbox  loginbox">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div class="fpassword">
                            <a href="javascript:void(0);">Forgot password?</a>
                        </div>
                    </div>
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" action="#" method="post">
                            <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" required="">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="">
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <input id="btn-login" type="submit" class="btn btn-success" value="Iniciar Sesíon">

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                        No tienes una cuenta?,
                                        <a href="javascript:void(0);" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Registrate ahora
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div id="signupbox" style="display:none; margin-top:50px" class="mainbox loginbox">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Registro</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px">
                            <a id="signinlink" href="javascript:void(0);" onclick="$('#signupbox').hide(); $('#loginbox').show()">Iniciar Sesíon</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form id="signupform" class="form-horizontal" action="#" method="post">
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                <input id="register-username" type="text" class="form-control" name="username" value="" placeholder="Usuario" required="">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </span>
                                <input id="register-email" type="email" class="form-control" name="email" value="" placeholder="Correo electronico" required="">
                            </div>


                            <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                <input id="register-password1" type="password" class="form-control" name="password1" value="" placeholder="Contraseña" required="">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                <input id="register-password2" type="password" class="form-control" name="password2" value="" placeholder="Repita la contraseña" required="" >
                            </div>



                            <div class="form-group">
                                <!-- Button -->
                                <div class="signup-btn">
                                    <input id="btn-signup" type="submit" class="btn btn-info" value="Registrarme">
                                        <i class="icon-hand-right"></i>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//signin and signup form ends here-->
<!-- footer -->
<div class="footer-bottom section">
</div>
<!-- //footer -->
<div class="cpy-right">
    <p>© 2018 Chronicle. All rights reserved | Design by
        <a href="http://w3layouts.com"> W3layouts.</a>
    </p>
</div>
<!-- //home -->
<!-- js -->
<script src="/js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!--search jQuery-->
<script src="/js/main.js"></script>
<!--search jQuery-->
<!-- cart-js -->
<script src="/js/minicart.js"></script>
<script>
    chr.render();

    chr.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->

<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- Scrolling Nav JavaScript -->
<script src="/js/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js -->
<!-- start-smooth-scrolling -->
<script src="/js/move-top.js"></script>
<script src="/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });

        if(getParameterByName("compra") === "true"){
            $.notify("Antes de realizar la compra debe iniciar sesión","warning");
        }

    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {


        $('#register-password2').keyup(function (event) {
            if($('#register-password1').val() != $('#register-password2').val()){
                $('#register-password1').css('border','2px solid #ec0404');
                $('#register-password2').css('border','2px solid #ec0404');
                $("#signupalert").css("display","block");
                $("#signupalert").html("Contraseñas deben coincidir")
                $("#btn-signup").prop("disabled", true);
            }else{
                $('#register-password1').css('border','1px solid #ccc');
                $('#register-password2').css('border','1px solid #ccc');
                $("#signupalert").css("display","none");
                $("#signupalert").html("")
                $("#btn-signup").prop("disabled", false);
            }
        });


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });


    $("#loginform").on("submit",function (form) {
        form.preventDefault();

        const data = {
            username: $("#login-username").val(),
            password: $("#login-password").val()
        };

        fetch('{{url("usuario/login")}}', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers:{
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => {
                if(response.status){
                    if(getParameterByName("compra") === "true"){
                        window.location.href = "{{url("checkout")}}";
                        return;
                    }
                    window.location.href = "{{url("")}}";
                }else{
                    $("#login-alert").css("display","block");
                    $("#login-alert").html(response.message);
                    $.notify(response.message, response.result);
                }
            });
    });

    $("#signupform").on("submit",function (form) {
        form.preventDefault();

        const data = {
            username: $("#register-username").val(),
            email: $("#register-email").val(),
            password1 : $("#register-password1").val(),
            password2 : $("#register-password2").val(),
        };

        fetch('{{url("usuario/register")}}', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers:{
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => {
                $.notify(response.message, response.result);
                if(response.status){
                    $("#btn-signup").prop("disabled", true);
                }
            });
    });

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }




</script>
<script src="/js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/bootstrap.js"></script>
<script src="/js/notify.min.js"></script>
</body>

</html>

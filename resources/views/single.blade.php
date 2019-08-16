<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>M-Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Chronicle Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{url("")}}/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="{{url("")}}/css/shop.css" type="text/css" rel="stylesheet" media="all">
    <!-- flexslider-css -->
    <link rel="stylesheet" href="{{url("")}}/css/flexslider.css" type="text/css" media="screen" />
    <link href="{{url("")}}/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{url("")}}/css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="{{url("")}}///fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="{{url("")}}///fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="{{url("")}}///fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->

    <link rel="apple-touch-icon" sizes="57x57" href="{{url("")}}//images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url("")}}//images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url("")}}//images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url("")}}//images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url("")}}//images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url("")}}//images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url("")}}//images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url("")}}//images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url("")}}//images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{url("")}}//images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url("")}}//images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url("")}}//images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url("")}}//images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{url("")}}//images/favicon/manifest.json">
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
                        <span class="sr-only">MBook</span>
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
                                <input name="Search" type="search" placeholder="Escriba y pulsa enter...">
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
    <!-- //navbar ends here -->
    <!-- banner -->
    <div class="banner-bg-inner">
        <!-- banner-text -->
        <div class="banner-text-inner">
            <div class="container">
                <h2 class="title-inner">
                    Mundo de la lectura
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
                    <li class="btn btn1">
                        <a href="{{url("")}}">
                            <i class="glyphicon glyphicon-home"></i>
                        </a>
                    </li>
                    <li class="btn btn2">
                        <a href="{{url("")}}/productos">Producto</a>
                    </li>

                    @if(isset($max))
                        <li class="btn btn3">
                            <a href="javascript:void(0)">Producto Más Vendido</a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    <!--//breadcrumbs ends here-->
    <!-- Single -->
    <div class="innerf-pages section">
        <div class="container">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="data:image/jpeg;base64,{{$libro->img[0]->img}}">
                                <div class="thumb-image">
                                    <img src="data:image/jpeg;base64,{{$libro->img[0]->img}}" data-imagezoom="true" alt=" " class="img-responsive"> </div>
                            </li>
                            <li data-thumb="data:image/jpeg;base64,{{$libro->img[0]->img}}">
                                <div class="thumb-image">
                                    <img src="data:image/jpeg;base64,{{$libro->img[0]->img}}" data-imagezoom="true" alt=" " class="img-responsive"> </div>
                            </li>
                            <li data-thumb="data:image/jpeg;base64,{{$libro->img[0]->img}}">
                                <div class="thumb-image">
                                    <img src="data:image/jpeg;base64,{{$libro->img[0]->img}}" data-imagezoom="true" alt=" " class="img-responsive"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3>{{$libro->titulo}}
                    <span>Fecha publicacion {{$libro->fechaPublicacion}}</span>
                </h3>
                <p>by
                    <a href="#">{{$libro->autor}}</a>
                </p>
                <div class="caption">

                    <ul class="rating-single">
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                    <h6>$ {{$libro->precioVenta}}</h6>
                </div>
                <div class="desc_single">
                    <h5>Description</h5>
                    <p>{{$libro->descripcion}}</p>
                </div>
                <div class="occasional">
                    <h5>Specifications</h5>
                    <ul class="single_specific">
                        <li>
                            <span>language :</span> Español</li>
                        <li>
                            <span>format :</span> De tapa dura</li>
                        <li>
                            <span>publisher :</span> {{$libro->fechaPublicacion}}</li>
                        <li>
                            <span>edition :</span> {{$libro->fechaPublicacion}}</li>
                    </ul>

                </div>

                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="#" method="post">
                            <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="{{$libro->id}}">
                            <input type="hidden" name="chr_item" value="{{$libro->titulo}}">
                            <input type="hidden" name="imgLibro" value="{{isset($libro->img[0]->img) ? $libro->img[0]->img : ""}}">
                            <input type="hidden" name="amount" value="{{$libro->precioVenta}}">
                            <input type="hidden" name="precio" value="{{$libro->precioVenta}}">
                            <input type="hidden" name="ISBN" value="{{$libro->ISBN}}">
                            <button type="submit" class="chr-cart pchr-cart">Agregar producto carrito compra
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- /new_arrivals -->

    <!--// Single -->
    <!-- footer -->
    <div class="footer-bottom section">
    </div>
    <!-- //footer -->
    <div class="cpy-right">
        <p>© 2018 Chronicle. All rights reserved | Design by
            <a href="{{url("")}}/http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
</div>
<!-- //home -->
<!-- Common js -->
<script src="{{url("")}}/js/jquery-2.2.3.min.js"></script>
<!--// Common js -->
<!-- cart-js -->
<script src="{{url("")}}/js/minicart.js"></script>
<script>
    chr.render();

    chr.cart.on('chr_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!-- zoom -->
<script src="{{url("")}}/js/imagezoom.js"></script>
<!-- zoom-->
<!-- single -->
<!-- FlexSlider -->
<script src="{{url("")}}/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider1').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->

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
<!--search jQuery-->
<script src="{{url("")}}/js/main.js"></script>
<!--search jQuery-->

<!-- Scrolling Nav JavaScript -->
<script src="{{url("")}}/js/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js -->
<!--//scripts-->
<script src="{{url("")}}/js/bootstrap.js"></script>
<!-- start-smoth-scrolling -->
<script src="{{url("")}}/js/move-top.js"></script>
<script src="{{url("")}}/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- smoothscroll -->
<script src="{{url("")}}/js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

</body>

</html>

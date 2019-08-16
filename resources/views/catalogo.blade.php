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
                            @if(session()->get("usuario")->rol > 1)
                                <li>
                                    <a href="{{url("/panel")}}" title="Panel Admin">
                                        <span class="fa fa-dashboard nav-icon" aria-hidden="true"></span>
                                    </a>
                                </li>
                            @endif

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
                                <input name="searchLike" onkeyup="buscarLike1()"  id="searchLike1" class="searchLike1" type="search" placeholder="Escriba y pulsa enter...">
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
                    <li class="btn btn1">
                        <a href="index.html">
                            <i class="glyphicon glyphicon-home"></i>
                        </a>
                    </li>
                    <li class="btn btn2">
                        <a href="{{url("")}}">Catalogo de producto</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--//breadcrumbs ends here-->
    <!-- Shop -->
    <div class="innerf-pages section">
        <div class="container-cart">
            <!-- product left -->
            <div class="side-bar col-md-3">
                <!--preference -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">
                        Categorias</h3>
                    <ul>

                        @foreach($data["catalogo"] as $row)
                            <li>
                                <a href="javascript:void(0);"><span class="span">{{$row->categoria}}</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- // preference -->
                <div class="search-hotel">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>Buscar</span></h3>

                    <input type="search" placeholder="search here" onkeyup="buscarLike2()" name="searchLike"  class="searchLike" id="searchLike2" required="">
                </div>
                <!-- price range -->

                <!-- //discounts -->
                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->


            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="left-ads-display col-md-9">
                <div class="wrapper_top_shop">
                    <!-- product-sec1 -->
                    <div class="product-sec1">


                        @foreach($data["libro"] as $row)
                            <div class="col-md-3 product-men">
                                <div class="product-chr-info chr">
                                    <div class="caption">
                                        <h4>ISBN {{$row->ISBN}}</h4>
                                    </div>
                                    <div class="thumbnail">
                                        <a href="{{"producto/$row->id"}}">
                                            <img src="data:image/jpeg;base64,{{isset($row->img[0]->img) ? $row->img[0]->img : ""}}" alt="">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>{{$row->titulo}}</h4>
                                        <p>{{$row->autor}}</p>
                                        <div class="matrlf-mid">
                                            <ul class="rating">
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
                                                        <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="price-list">
                                                <li>{{$row->precioVenta  + ($row->precioVenta * $row->descuento)}}</li>
                                                <li>
                                                   {{$row->precioVenta}}
                                                </li>
                                            </ul>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <form action="#" method="post">
                                            <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="{{$row->id}}">
                                            <input type="hidden" name="chr_item" value="{{$row->titulo}}">
                                            <input type="hidden" name="imgLibro" value="{{isset($row->img[0]->img) ? $row->img[0]->img : ""}}">
                                            <input type="hidden" name="amount" value="{{$row->precioVenta}}">
                                            <input type="hidden" name="precio" value="{{$row->precioVenta}}">
                                            <input type="hidden" name="ISBN" value="{{$row->ISBN}}">
                                            <button type="submit" class="chr-cart pchr-cart">Agregar producto carrito compra
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="clearfix"></div>

                    </div>

                    <!-- //product-sec1 -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!--// Shop -->
    <!-- footer -->

    <div class="footer-bottom section">
    </div>
    <!-- //footer -->
    <div class="cpy-right">
        <p>© 2018 Chronicle. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>

</div>
<!-- //home -->
<!-- js -->
<!-- Common js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!--// Common js -->
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    chr.render();
    chr.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();
            localStorage.chr = chr;
            for (i = 0, len = items.length; i < len; i++) {}
        }
    });


    $("#formCarrito").on("submit",function (form) {
        form.preventDefault();
    })

</script>
<!-- //cart-js -->
<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->

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
<script src="js/main.js"></script>
<!--search jQuery-->

<!-- Scrolling Nav JavaScript -->
<script src="js/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js -->
<!--//scripts-->

<script src="js/bootstrap.js"></script>
<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
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


    function buscarLike1() {
        var input = document.getElementById("searchLike1");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('product-men');

        for (i = 0; i <= nodes.length-1; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "block";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }

    function buscarLike2() {
        var input = document.getElementById("searchLike2");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('product-men');

        for (i = 0; i <= nodes.length-1; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "block";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }



    function textToBase64Barcode(text){
        var canvas = document.createElement("canvas");
        JsBarcode(canvas, text, {format: "CODE128"});
        return canvas.toDataURL("image/png");
    }

</script>
<!-- //here ends scrolling icon -->
<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

</body>

</html>

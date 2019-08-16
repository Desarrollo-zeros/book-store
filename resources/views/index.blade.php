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
    <div class="banner-bg-agileits">
        <!-- banner-text -->
        <div class="banner-text">
            <div class="container">
                <p class="b-txt">MBooK</p>
                <h3 class="title">
                   Tú Libreria
                </h3>
                <ul class="banner-txt">
                    <li>Comparte.</li>
                    <li> Explora. </li>
                    <li>amplifica.</li>
                </ul>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about-sec section" id="about">
        <div class="container">
            <!-- about-left-grid -->
            <div class="col-md-7 about-left-grid">
                <div class="inner-about2">
                    <h4>Tu Librería descubre un nuevo mundo en los libros</h4>
                    <p>Consideramos que la magia que tiene los libros son transmitidad a sus lectores</p>
                    <h5>Por eso contamos con las siguientes categorias (Catalogo)</h5>
                    <ul class="about-list">

                        @foreach($data["catalogo"] as $row)
                            <li>
                                <i class="fa fa-play-circle-o" href="javascript:void(0)" aria-hidden="true"></i>
                                {{$row->categoria}}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{url("/productos/")}}">Ver Productos</a>
                </div>
                <!-- about left bottom - services -->
                <div class="principles-grids principles-grids1">
                    <div class="abt-btm agileits w3layouts aos-init aos-animate">
                        <div class="col-md-6 col-sm-6 agileits elite-services1 w3layouts bottom-gds" data-aos="fade-up">
                            <div class="bott-img agileits w3layouts">
                                <div class="icon-holder agileits w3layouts">
                                    <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                </div>
                                <h4 class="mission agileits w3layouts">Libros</h4>
                                <div class="description agileits w3layouts">
                                    <a href="{{url("/productos")}}">Ver mas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 agileits elite-services2 w3layouts bottom-gds" data-aos="fade-down">
                            <div class="bott-img bott-img1 agileits w3layouts">
                                <div class="icon-holder agileits w3layouts">
                                    <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                </div>
                                <h4 class="mission agileits w3layouts">Libro Mas Vendido</h4>
                                <div class="description agileits w3layouts">
                                    <a href="{{url("/max")}}">Libro Mas vendido</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //about left bottom - services ends here -->
            </div>
            <!-- //about-left-grid ends here-->
            <!-- about-right-grid -->
            <div class="col-md-5 about-right-grid"></div>
            <!-- //about-right-grid ends here -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //about ends here -->
    <!-- about bottom -->
    <div id="categoria" class="about-bottom section">
        <div class="container-fluid">
            <h4 class="rad-txt">
                <span class="abtxt1">Un Maravilloso</span>
                <span class="abtext"> Mundo dentro de la lectura</span>
            </h4>
            <!-- about-bottom grid1 -->
            <div class="col-md-6 about-bottom-right">
                <p class="abt-p">
                El mundo esta lleno de cuentos (buenos y malos), ¿te gustaria vivir en uno de esto?
                    <br>
                 Entonces vive en nuestra categorias
                </p>

                @php $i=1; @endphp
                    @foreach($data["catalogo"] as $row)
                    @if($i==1)
                        <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls">@endif
                            <div class="ab1">
                                <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                    <a href="javascript:void(0)"> <span class="fa fa-book" aria-hidden="true"></span></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                    <h5>{{$row->categoria}}</h5>
                                    <p>{{$row->detalle}}</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            @if($i==4)
                        </div>
                    @php $i=1; @endphp
                    @else
                        @php $i++; @endphp
                    @endif
                @endforeach
                <div class="clearfix"></div>
            </div>
            <!-- //about-bottom grid1 ends here -->
            <div class="col-md-6 home-about2">
                <!-- about-bottom grid2 -->
                <div class="col-md-6 col-sm-6 col-xs-6 bg-right"></div>
                <!-- //about-bottom grid2 ends here -->
                <!-- about-bottom grid3 -->
                <div class="col-md-6 col-sm-6 col-xs-6 w3ls-section  stats">
                    <div class="stats-aboutinfo services-main">
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>volumes</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='221073' data-delay='.5' data-increment="300">221073</div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-university" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>branches</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='780' data-delay='.5' data-increment="50">980</div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>e-books</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9800' data-delay='.5' data-increment="50">9800</div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-users" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>visitors</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='123623' data-delay='.5' data-increment="300">123623</div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //about-bottom grid3 ends here -->
            <!-- //Numscroller -->
            <div class="clearfix"></div>
        </div>
        <!-- //about container ends here-->
    </div>

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
<!-- Scrolling Nav JavaScript -->
<script src="/js/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js -->
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
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
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
<script src="/js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- about bottom grid Numscroller -->
<script src="/js/numscroller-1.0.js"></script>
<!-- //about bottom grid Numscroller -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/bootstrap.js"></script>
</body>

</html>

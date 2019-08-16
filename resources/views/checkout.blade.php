<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Chronicle Education Category Bootstrap Responsive website Template | Checkout :: w3layouts</title>
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
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <!-- checkout css -->
    <link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                                        <span class="fa fa-dashboard nav-icon" aria-hidden="true">Panel</span>
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
                        <a href="shop.html">Libros</a>
                    </li>
                    <li class="btn btn3 btn3a">
                        <a href="single_product.html">Facturacíon</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!--//breadcrumbs ends here-->
    <!--checkout-->
    <div class="innerf-pages section">
        <div class="container">
            <div class="privacy about">
                <h4 class="rad-txt">
                    <span class="abtxt1">Revisar la orden</span>
                    <span class="abtext">Tu orden</span>
                </h4>

                <div class="checkout-right">
                    <h4>Su carrito de compras contiene
                        <span id="countProducto">0 Producto</span>
                    </h4>
                    <table class="timetable_sub table-responsive">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Product Name</th>

                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody id="tableCheckout">
                        </tbody>
                    </table>
                </div>

                <div class="checkout-left">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Facturación</h4>
                        <ul>
                            <li>Cargo por libros
                                <i>-</i>
                                <span id="cargoLibro"></span>
                            </li>
                            <li>Cargo por envio
                                <i>-</i>
                                <span>$10.000</span>
                            </li>
                            <li>Iva
                                <i>-</i>
                                <span>19%</span>
                            </li>
                            <li>Sub Total
                                <i>-</i>
                                <span id="subTotal">$10.000</span>
                            </li>
                            <li>Total
                                <i>-</i>
                                <span id="total">$355.00</span>
                            </li>
                        </ul>
                    </div>



                    <div class="col-md-8 address_form">
                        <h4>Datos personales</h4>
                        <form action="" id="formPersonal" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <div class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Primer Nombre: </label>
                                            <input type="hidden" id="persona_id" value="{{isset($persona->id) ? $persona->id : ""}}">
                                            <input class="billing-address-name form-control" type="text" name="primerNombre" id="primerNombre" value="{{isset($persona->primerNombre) ? $persona->primerNombre : ""}}" placeholder="Primer Nombre" required="required">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Segundo Nombre: </label>
                                            <input class="billing-address-name form-control" type="text" name="segundoNombre" id="segundoNombre" value="{{isset($persona->segundoNombre) ? $persona->segundoNombre : ""}}" placeholder="Segundo Nombre">
                                        </div>

                                        <div class="controls">
                                            <label class="control-label">Primer Apellido: </label>
                                            <input class="billing-address-name form-control" type="text" name="primerApellido" id="primerApellido"  value="{{isset($persona->primerApellido) ? $persona->primerApellido : ""}}" placeholder="Primer Apellido" required="required">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Segundo Apellido: </label>
                                            <input class="billing-address-name form-control" type="text" name="segundoApellido" id="segundoApellido" value="{{isset($persona->segundoApellido) ? $persona->segundoApellido : ""}}" placeholder="Segundo Apellido" required="required">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Telefono:</label>
                                                    <input class="form-control" value="{{isset($persona->telefono) ? $persona->telefono : ""}}" type="text" id="telefono" name="telefono"  placeholder="Telefono" required="" minlength="10" maxlength="10" pattern="[0-9$,.]*">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Dirección: </label>
                                                    <input class="form-control" type="text" value="{{isset($persona->direccion) ? $persona->direccion : ""}}" id="direccion" name="direccion" placeholder="Dirección" required="" minlength="8">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Municipio </label>
                                            <input class="form-control" type="text" value="{{isset($persona->municipio) ? $persona->municipio : ""}}"  id="municipio" name="municipio" placeholder="Municipio" required="" minlength="4">
                                        </div>

                                    </div>
                                    <input type="submit" class="submit check_out btn btn-success" value="Completar Compra">
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-4 checkout-left-basket">
                        <h4>Generar Factura</h4>
                        <img width="370" id="bcTarget" src="">
                        <button onclick="return GenerarRecibo(parseInt(Math.random()*1000000000) +' '+parseInt(Math.random()*1000000000)+' '+parseInt(Math.random()*1000000000)+' '+parseInt(Math.random()*1000000000)+' '+parseInt(Math.random()*1000000000));" class="btn btn-lg btn-success form-control">Generar Factura</button>
                    </div>

                    <div class="clearfix"> </div>

                </div>
            </div>
        </div>
    </div>
    <!--//checkout-->
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

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });


    if(chr.cart._items.length > 0){
        $("#countProducto").html(chr.cart._items.length+" Producto");
    }

    var items = chr.cart._items;


    var string = "";
    var cont = 1;
    for(var i in items){
       string += '<tr class="">\n' +
           '                                    <td class="invert">'+(cont)+'</td>\n' +
           '                                    <td class="invert-image">\n' +
           '                                        <a href="#">\n' +
           '                                            <img src="'+items[i]._data.imgLibro+'" width="50" style="width: 50px!important;" alt=" " >\n' +
           '                                        </a>\n' +
           '                                    </td>\n' +
           '                                    <td class="invert">\n' +
           '                                        <div class="quantity">\n' +
           '                                            <div class="quantity-select">\n' +
           '                                                <div class="entry value-minus">'+cont+'</div>\n' +
           '                                                <div class="entry value">\n' +
           '                                                    <span class="value-'+cont+'" >1</span>\n' +
           '                                                </div>\n' +
           '                                                <div class="entry value-plus active" >'+cont+'</div>\n' +
           '                                            </div>\n' +
           '                                        </div>\n' +
           '                                    </td>\n' +
           '                                    <td class="invert">'+items[i]._data.chr_item+'</td>\n' +
           '\n' +
           '                                    <input type="hidden" value="'+items[i]._data.amount+'" id="amount-'+cont+'">' +
           '                                    <input type="hidden" value="'+i+'" id="id-'+cont+'">                                   ' +
           '<td class="entry amount-'+cont+'">'+items[i]._data.amount+'</td>\n' +
           '                                </tr>';
        cont++;
    }
    $("#tableCheckout").html(string);

</script>
<!-- //cart-js -->
<!--quantity-->
<script>


    var cont = 1;
    var totalLibro = 0;
    for(var i in items){
        totalLibro += items[i]._data.amount * items[i]._data.quantity;
        var amount = $(".amount-"+cont);
        amount.text($("#amount-"+cont).val() * items[i]._data.quantity);
        $(".value-"+ cont).text(items[i]._data.quantity);
        cont++;
    }


    $("#cargoLibro").html(totalLibro);
    $("#subTotal").html("$"+parseInt(totalLibro + 10000));
    $("#total").html("$"+parseInt( totalLibro + (totalLibro*0.19) + 10000));


    $('.value-plus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;

        var cantidad = $(this).text();

        var amount = $(".amount-"+cantidad);

        amount.text($("#amount-"+cantidad).val()*newVal);

        chr.cart._items[$("#id-"+cantidad).val()]._data.quantity = newVal;
        console.log($("#id-"+cantidad).val());


        divUpd.text(newVal);

        var cont = 1;
        var totalLibro = 0;
        for(var i in chr.cart._items){
            var amount = $(".amount-"+cont);
            totalLibro += parseInt(amount.text());
            cont++;
        }
        $("#cargoLibro").html(totalLibro);
        $("#subTotal").html("$"+parseInt(totalLibro + 10000));
        $("#total").html("$"+parseInt( totalLibro + (totalLibro*0.19) + 10000));
        chr.cart.total = parseInt( totalLibro + (totalLibro*0.19) + 10000);
        chr.cart.save();
    });

    $('.value-minus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) {
            var cantidad = $(this).text();
            var amount = $(".amount-"+cantidad);
            divUpd.text(newVal);
            amount.text($("#amount-"+cantidad).val()*newVal);

            chr.cart._items[$("#id-"+cantidad).val()]._data.quantity = newVal;
            console.log($("#id-"+cantidad).val());

            var cont = 1;
            var totalLibro = 0;
            for(var i in chr.cart._items){
                var amount = $(".amount-"+cont);
                totalLibro += parseInt(amount.text());
                if($("#id-"+cont).val() ===  chr.cart._items[i].add){
                    chr.cart._items[i]._data.quantity = newVal;
                }

                cont++;
            }
            $("#cargoLibro").html(totalLibro);
            $("#subTotal").html("$"+parseInt(totalLibro + 10000));
            $("#total").html("$"+parseInt( totalLibro + (totalLibro*0.19) + 10000));
            chr.cart.total = parseInt( totalLibro + (totalLibro*0.19) + 10000);
            console.log(chr.cart._data);
            chr.cart.save();
        }
    });


    $("#formPersonal").on("submit",function (form) {
        form.preventDefault();
        var producto = {"libro":[], "total" : 0};

        producto.total = $("#total").text().split("$")[1];

        for(var i in chr.cart._items){
            producto.libro.push({"id": chr.cart._items[i]._data.add, "cantidad" :  chr.cart._items[i]._data.quantity});
        }

        var data = {
            id : $("#persona_id").val(),
            primerNombre: $("#primerNombre").val(),
            segundoNombre: $("#segundoNombre").val(),
            primerApellido: $("#primerApellido").val(),
            segundoApellido: $("#segundoApellido").val(),
            telefono: $("#telefono").val(),
            municipio: $("#municipio").val(),
            direccion: $("#direccion").val(),
            usuario_id : '{{!empty(session()->get("usuario")->id) ? session()->get("usuario")->id : ""}}',
            data :  producto
        };

        fetch('{{url("persona/register")}}', {
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

    })
</script>
<!--quantity-->
<!-- FadeOut-Script -->
<script>
    $(document).ready(function (c) {
        $('.close1').on('click', function (c) {
            $('.rem1').fadeOut('slow', function (c) {
                $('.rem1').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function (c) {
        $('.close2').on('click', function (c) {
            $('.rem2').fadeOut('slow', function (c) {
                $('.rem2').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function (c) {
        $('.close3').on('click', function (c) {
            $('.rem3').fadeOut('slow', function (c) {
                $('.rem3').remove();
            });
        });
    });
</script>
<!--// FadeOut-Script -->

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
<!-- start-smooth-scrolling -->
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

    function textToBase64Barcode(text){
        var canvas = document.createElement("canvas");
        JsBarcode(canvas, text, {format: "CODE128"});
        return canvas.toDataURL("image/png");
    }



    function GenerarRecibo(codigo) {

        $("#bcTarget").attr("src",textToBase64Barcode(codigo.toString()));
        var imgData = "data:image/png;base64,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";

        var columns = [
            {title: "SL No.", dataKey: "n"},
            {title: "Producto ISBN", dataKey: "codigo"},
            {title: "cantidad", dataKey: "cantidad"},
            {title: "Nombre Producto", dataKey: "nombre"},
            {title: "precio Unitario", dataKey: "precio"},
            {title: "Precio Neto", dataKey: "total"},
        ];

        var doc = new jsPDF('l', 'mm', 'letter');
        var totalPagesExp = "{total_pages_count_string}";

        var pageContent = function (data) {
            // HEADER
            doc.setFontSize(20);
            doc.setTextColor(40);
            doc.setFontStyle('normal');
            doc.addImage(imgData, 'JPEG', data.settings.margin.left, 15, 10, 10);
            doc.text("Reporte de Compra, Fecha realizacíon: "+fecha(), data.settings.margin.left + 15, 22);

            // FOOTER
            var str = "Page " + data.pageCount;
            // Total page number plugin only available in jspdf v1.0+
            if (typeof doc.putTotalPages === 'function') {
                str = str + " de " + totalPagesExp;
            }
            doc.setFontSize(10);
            doc.addImage("data:image/png;base64,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",'PNG', 240, 227,40,20,30);
            doc.text(str, data.settings.margin.left , 10);
        };



        var items = chr.cart._items;


        var data = [];
        var cont = 1;
        for(var i in items){
            data.push({
                n : cont,
                codigo : items[i]._data.ISBN,
                cantidad : items[i]._data.quantity,
                nombre : items[i]._data.chr_item,
                precio : items[i]._data.precio,
                total :  items[i]._data.quantity *  items[i]._data.precio,
            });
            cont++;
        }

        console.log(data);

        doc.autoTable(columns, data, {
            addPageContent: pageContent,
            margin: {top: 30},
        });

        // Total page number plugin only available in jspdf v1.0+
        if (typeof doc.putTotalPages === 'function') {
            doc.putTotalPages(totalPagesExp);
        }
        doc.setFontSize(10);


        doc.addPage();
        doc = addWaterMark(doc);
        doc.save('factura.pdf');

    }


    function fecha() {
        var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        var f=new Date();
        return diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
    }

    function addWaterMark(doc) {
        var totalPages = doc.internal.getNumberOfPages();
        var imgData = "data:image/png;base64,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";

        for (i = 1; i <= totalPages; i++) {
            doc.setPage(i);
            doc.addImage(imgData, 'PNG', 100, 70, 80, 80);
            doc.text("_____________________________________________________________________________________________________________________________", 22,175);
            const img = document.querySelector('img#bcTarget');
            doc.addImage(img.src, 'PNG', 20,180,250,30);
            doc.setTextColor(150);
            doc.text(10, doc.internal.pageSize.height-5, 'MBook- Dev Zeros');
        }
        return doc;
    }
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
<script src="/js/notify.min.js"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.js"></script>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.7/JsBarcode.all.min.js"></script>

</body>

</html>

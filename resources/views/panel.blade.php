<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>M-Book</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


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

<body>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo"><a href="{{url("")}}"><span>MBooK</span></a></div>
            <ul>
                <li class="label">Main</li>
                <li class="active"><a href="{{url("")}}" class="sidebar-sub-toggle"><i class="ti-home"></i>Panel Administrativo<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                </li>
                <li class="label">Apps</li>
                <li><a href="javascript:void(0)" onclick="$('.cerrar').css('display','none'); $('.categoria').css('display','block');"><i class="ti-view-list-alt"></i> Categoria </a></li>
                <li><a href="javascript:void(0)" onclick="$('.cerrar').css('display','none'); $('.proveedor').css('display','block');"><i class="ti-archive"></i> Proveedor </a></li>
                <li><a href="javascript:void(0)" onclick="$('.cerrar').css('display','none'); $('.comprarLibro').css('display','block');"><i class="ti-book"></i> Comprar Libro </a></li>
                <li><a href="{{url("usuario/destroy")}}"><i class="ti-close"></i> Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->


<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <ul>

                        <li class="header-icon dib"><i class="ti-bell"></i>
                            <div class="drop-down">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Notificacion Reciente</span>
                                </div>
                                <div class="dropdown-content-body">
                                </div>
                            </div>
                        </li>
                        <li class="header-icon dib"><i class="ti-email"></i>
                            <div class="drop-down">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">2 New Messages</span>
                                    <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                                </div>
                                <div class="dropdown-content-body">
                                </div>
                            </div>
                        </li>
                        <li class="header-icon dib"><span class="user-avatar">{{$persona->primerNombre}} <i class="ti-angle-down f-s-10"></i></span>
                            <div class="drop-down dropdown-profile">
                                <div class="dropdown-content-heading">

                                </div>
                                <div class="dropdown-content-body">
                                    <ul>

                                        <li><a href="{{url("usuario/destroy")}}"><i class="ti-power-off"></i> <span>Cerrar Sesión</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hola!, <span>Bienvenido</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                                <li class="breadcrumb-item active">Inicio</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Saldo en Caja </div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i><span id="saldoCaja">{{$caja->saldo}}</span></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Venta Total</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i><span id="saldoCompra">{{$totalVenta}}</span></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Compras Total</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i><span id="libroTotal">{{$totalCompra}}</span></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Cantidad de libros</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$totalLibros}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->


                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="proveedor cerrar" style="display: none;">
                                    <h4 class="card-title">Gestion Proveedor</h4>
                                    <br>
                                    <h3 class="alerta text-center"></h3>
                                    <br>
                                    <form id="formProveedor">

                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label for="proveedor_id">id</label>
                                                <input type="text"  readonly class="form-control" id="proveedor_id" name="categoria_id" placeholder="Id">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="proveedor_nombre">Nombre</label>
                                                <input type="text" class="form-control" id="proveedor_nombre" name="proveedor_nombre" placeholder="Nombre de Proveedor" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="proveedor_direccion">Dirección</label>
                                                <input type="text" class="form-control" id="proveedor_direccion" name="proveedor_nombre" placeholder="Dirección de Proveedor" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="proveedor_telefono">Télefono</label>
                                                <input type="text" class="form-control" id="proveedor_telefono" name="proveedor_telefono" placeholder="Télefono de Proveedor" required="required" minlength="10" maxlength="10" pattern="[0-9$,.]*">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="proveedor_tipo">Tipo Proveedor</label>
                                                  <select class="form-control" id="proveedor_tipo">
                                                    <option value="1">Editorial</option>
                                                    <option value="2">Persona Natural</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <input type="submit" value="Registrar" class="btn btn-primary btn-form-class">
                                            &nbsp&nbsp<button type="button" onclick="$('#formProveedor').css('display','none');$('#tableLoadingProveedor').css('display','block');" class="btn btn-info btn-form">Ver Proveedor</button>
                                        </div>

                                    </form>

                                    <div id="tableLoadingProveedor" class="table-responsive" style="display: none;">
                                        <table class="table">
                                            <thead style="width: 100%">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Dirección</th>
                                                <th>Télefono</th>
                                                <th>Tipo</th>
                                                <th>Acción</th>
                                                <th>#</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableProveedor">
                                            </tbody>
                                        </table>
                                        <button type="button" onclick="$('#formProveedor').css('display','block');$('#tableLoadingProveedor').css('display','none');" class="btn btn-info btn-form">Registrar Proveedor</button>
                                    </div>

                                </div>


                                <div class="comprarLibro cerrar" style="display: none;">
                                    <h4 class="card-title">Gestion Libro</h4>
                                    <br>
                                    <h3 class="alerta text-center"></h3>
                                    <br>
                                    <form id="formLibro">

                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label for="libro_id">id</label>
                                                <input type="text"  readonly class="form-control" id="libro_id" name="libro_id" placeholder="Id">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_isbn">ISBN</label>
                                                <input type="number" class="form-control" id="libro_isbn" name="libro_isbn" placeholder="Codigo ISBN" required="required" min="1000">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_titulo">Titulo</label>
                                                <input type="text" class="form-control" id="libro_titulo" name="libro_titulo" placeholder="Titulo" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_descripcion">Descripción</label>
                                                <textarea type="text" class="form-control" id="libro_descripcion" name="libro_descripcion" placeholder="Descripción de Libro" required="required"></textarea>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_autor">Autor</label>
                                                <input type="text" class="form-control" id="libro_autor" name="libro_autor" placeholder="Autor" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_precio_compra">Precio de Compra</label>
                                                <input type="number" class="form-control" id="libro_precio_compra" name="libro_precio_compra" placeholder="Precio de Compra" required="required" min="10000">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_precio_venta">Precio de Venta</label>
                                                <input type="number" class="form-control" id="libro_precio_venta" name="libro_precio_venta" placeholder="Precio de Venta" required="required" min="10000">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_cantidad">Cantidad</label>
                                                <input type="number" class="form-control" id="libro_cantidad" name="libro_cantidad" placeholder="Precio de Venta" required="required" min="1">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_precio_cantidad">Imagen 1</label>
                                                <input type="file" class="form-control" id="libro_imagen_1" name="files" placeholder="Imagen 1">
                                                <input type="hidden" class="form-control" id="libro_imagen_empty_1" name="libro_imagen_empty_1">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_precio_cantidad">Imagen 2</label>
                                                <input type="file" class="form-control" id="libro_imagen_2" name="files" placeholder="Imagen 2">
                                                <input type="hidden" class="form-control" id="libro_imagen_empty_2" name="libro_imagen_empty_2">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_precio_cantidad">Imagen 3</label>
                                                <input type="file" class="form-control" id="libro_imagen_3" name="files" placeholder="Imagen 3">
                                                <input type="hidden" class="form-control" id="libro_imagen_empty_3" name="libro_imagen_empty_3">
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label for="libro_proveedor">Nombre Proveedor</label>
                                                <select class="form-control" id="libro_proveedor" required="required"required="required">
                                                    @foreach($proveedor as $row)
                                                        <option value="{{$row->id}}">{{$row->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_proveedor">Catalogo</label>
                                                <select class="form-control" id="libro_catalogo" required="required">
                                                    @foreach($catalogo as $row)
                                                        <option value="{{$row->id}}">{{$row->categoria}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="libro_descuento">Descuento %</label>
                                                <input type="number" step="0.01" class="form-control" id="libro_descuento" name="libro_descuento" required="required" value="1">
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <input type="submit" id="btnRegistro" value="Registrar" class="btn btn-primary btn-form-class">
                                            &nbsp&nbsp<button type="button" onclick="$('#formLibro').css('display','none');$('#tableLoadingLibro').css('display','block');cargarLibros();" class="btn btn-info btn-form">Ver Libros</button>
                                            &nbsp&nbsp&nbsp&nbsp<h4 id="alertLibro"></h4>
                                        </div>



                                    </form>

                                    <div id="tableLoadingLibro" class="table-responsive">
                                        <table class="table">
                                            <h3 id="tipoTableLibro"></h3>
                                            <thead style="width: 100%">
                                            <tr>
                                                <th>#</th>
                                                <th>ISBN</th>
                                                <th>Titulo</th>
                                                <th>Descripción</th>
                                                <th>Autor</th>
                                                <th>Precio Compra</th>
                                                <th>Precio Venta</th>
                                                <th>Cantidad Actual</th>
                                                <th>Descuento</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableLibro">
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <button type="button" id="btnTableLibro" onclick="limpiar();" class="btn btn-info btn-form">Registrar Libro</button>

                                </div>

                                <div class="categoria cerrar"  style="display: none;">
                                    <div class="open-close">
                                        <h4 class="card-title">Gestion Catalogo</h4>
                                        <br>
                                        <h3 class="alerta text-center"></h3>
                                        <br>
                                        <form id="formCategoria">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="id">id</label>
                                                    <input type="text"  readonly class="form-control" id="categoria_id" name="categoria_id" placeholder="Id">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="categoria">Categoria</label>
                                                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria" required="required">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="detalle">Detalle</label>
                                                    <textarea type="detalle" class="form-control" id="detalle" placeholder="Detalle" required="required">

                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <input type="submit" value="Registrar" class="btn btn-primary btn-form-class">
                                                &nbsp&nbsp<button type="button" onclick="$('#formCategoria').css('display','none');$('#tableLoadingCategoria').css('display','block');" class="btn btn-info btn-form">Ver Catalogos</button>
                                            </div>
                                        </form>

                                        <br>

                                        <div id="tableLoadingCategoria"  class="table-responsive" style="display: none;">
                                            <table class="table">
                                                <thead style="width: 100%">
                                                    <tr>
                                                        <th>Categoria</th>
                                                        <th>Datella</th>
                                                        <th>fecha</th>
                                                        <th>Acción</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableCategoria">
                                                </tbody>
                                            </table>
                                            <button  type="button" onclick="$('#formCategoria').css('display','block');$('#tableLoadingCategoria').css('display','none');" class="btn btn-info btn-form">Registrar Catalogo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="assets/js/lib/menubar/sidebar.js"></script>
<script src="assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->
<script src="assets/js/lib/bootstrap.min.js"></script>

<!-- bootstrap -->

<script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
<script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>

<script src="assets/js/lib/morris-chart/raphael-min.js"></script>
<script src="assets/js/lib/morris-chart/morris.js"></script>
<script src="assets/js/lib/morris-chart/morris-init.js"></script>

<!--  flot-chart js -->
<script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>
<!-- // flot-chart js -->


<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/vector-map/vector.init.js"></script>

<script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="assets/js/lib/weather/weather-init.js"></script>
<script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="/js/notify.min.js"></script>
<!-- scripit init-->

<script src="/js/autosize.js"></script>

<script>



    var string = "";
    var cont = 1;
    var libro = [];


    $("#btnTableLibro").click(function () {
      if( $(this).text() == "Registrar Libro"){
          $('#formLibro').css('display','block');
          $('#tableLoadingLibro').css('display','none');
      }else{
          console.log(libro);
          if(confirm("Completar Operacion, una vez confirmado no se podra modificar la factura ni los detalles de esta, desea seguir?")){
              fetch('{{url("panel/libro?id=1")}}', {
                  method: 'POST', // or 'PUT'
                  body: JSON.stringify(libro), // data can be `string` or {object}!
                  headers: {
                      'Content-Type': 'application/json',
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              }).then(res => res.json())
                  .catch(error => console.error('Error:', error))
                  .then(response => {
                      $("#saldoCaja").html(response.saldo);
                      $("#saldoCompra").html(response.compra);
                      $("#libroTotal").html(response.libro);
                      if(response.status){
                          var string = "";
                          $("#alertLibro").css("color","green");
                          $("#alertLibro").html(response.message);
                          tablaLibro(response.data);
                          $("#btnTableLibro").text("Registrar Libro");
                          libro = [];
                      }else{
                          $("#alertLibro").css("color","red");
                          $("#alertLibro").html(response.message);
                      }
                  });
          }
      }
    });



    function limpiar() {
       /* $("#libro_isbn").val("");
        $("#libro_titulo").val("");
        $("#libro_descripcion").val("");
        $("#libro_autor").val("");
        $("#libro_precio_compra").val("");
        $("#libro_precio_venta").val("");
        $("#libro_cantidad").val("");
        $("#libro_descuento").val("");*/
    }


    function editLibro(data) {
        $("#libro_isbn").val(data.ISBN);
        $("#libro_titulo").val(data.titulo);
        $("#libro_descripcion").val(data.descripcion);
        $("#libro_autor").val(data.autor);
        $("#libro_precio_compra").val(data.precioCompra);
        $("#libro_precio_venta").val(data.precioVenta);
        $("#libro_cantidad").val(data.cantidadActual);
        $("#libro_descuento").val(data.descuento);

        if(data.img[0] != undefined){
            $("#libro_imagen_empty_1").val(data.img[0].img);
        }
        if(data.img[1] != undefined){
            $("#libro_imagen_empty_2").val(data.img[1].img);
        }
        if(data.img[2] != undefined){
            $("#libro_imagen_empty_3").val(data.img[2].img);
        }

        $("#libro_catalogo").prop("disabled",true);
        $("#libro_proveedor").prop("disabled",true);

        $("#libro_id").val(data.id);
        $("#formLibro").css("display","block");
        $("#tableLoadingLibro").css("display","none");
        $("#btnRegistro").val("Actualizar Libro");
    }



    $("#formLibro").on("submit",function (form) {
       form.preventDefault();
        if($("#libro_id").val() == ""){
           var string1 = "";
           var bool = false;
           for(var i in libro){
               if(libro[i].isbn === $("#libro_isbn").val() && libro[i].catalogo_id === $("#libro_catalogo").val()){
                   bool = true;
               }
           }

           if(bool){
               alert("el producto ya existe, modifica la categoria");
               return;
           }
            $("#btnTableLibro").text("Registrar Toda la Compra");

           string1 += "<tr id='cont-"+cont+"'>";
           string1 += "<td>"+cont+"</td>";
           string1 += "<td>"+$("#libro_isbn").val()+"</td>";
           string1 += "<td>"+$("#libro_titulo").val()+"</td>";
           string1 += "<td>"+$("#libro_descripcion").val()+"</td>";
           string1 += "<td>"+$("#libro_autor").val()+"</td>";
           string1 += "<td>"+$("#libro_precio_compra").val()+"</td>";
           string1 += "<td>"+$("#libro_precio_venta").val()+"</td>";
           string1 += "<td>"+$("#libro_cantidad").val()+"</td>";
           string1 += "<td>"+$("#libro_descuento").val()+"</td>";
           string1 += "<td><a style='position: relative; right: 50px;' onclick='deleteLibro("+cont+")' href='javascript:void(0)' class='btn text-danger fa fa-edit fa-fw'>Eliminar</a></td>";
           string1 += "</tr>";
           string += string1;
           $("#tableLibro").html(string);

           libro.push({
               isbn : $("#libro_isbn").val(),
               titulo :  $("#libro_titulo").val(),
               descripcion :  $("#libro_descripcion").val(),
               autor : $("#libro_autor").val(),
               precioCompra : $("#libro_precio_compra").val(),
               precioVenta : $("#libro_precio_venta").val(),
               cantidadActual : $("#libro_cantidad").val(),
               img1 : $("#libro_imagen_empty_1").val(),
               //img2 : $("#libro_imagen_empty_2").val(),
               //img3 : $("#libro_imagen_empty_3").val(),
               catalogo_id : $("#libro_catalogo").val(),
               proveedor_id : $("#libro_proveedor").val(),
               descuento : $("#libro_descuento").val()
           });
           console.log(libro);
           cont++;
       }else{
           var data = {
               id : $("#libro_id").val(),
               isbn : $("#libro_isbn").val(),
               titulo :  $("#libro_titulo").val(),
               descripcion :  $("#libro_descripcion").val(),
               autor : $("#libro_autor").val(),
               precioCompra : $("#libro_precio_compra").val(),
               precioVenta : $("#libro_precio_venta").val(),
               cantidadActual : $("#libro_cantidad").val(),
               img1 : $("#libro_imagen_empty_1").val(),
               //img2 : $("#libro_imagen_empty_2").val(),
               //img3 : $("#libro_imagen_empty_3").val(),
               catalogo_id : $("#libro_catalogo").val(),
               proveedor_id : $("#libro_proveedor").val(),
               descuento : $("#libro_descuento").val()
           };

           fetch('{{url("panel/libro?id=2")}}', {
               method: 'POST', // or 'PUT'
               body: JSON.stringify(data), // data can be `string` or {object}!
               headers: {
                   'Content-Type': 'application/json',
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           }).then(res => res.json())
               .catch(error => console.error('Error:', error))
               .then(response => {
                   if(response.status){
                       $("#alertLibro").html(response.message)
                       tablaLibro(response.data);
                       $("#alertLibro").css("color","green");
                       $("#alertLibro").html(response.message);
                   }
                   else{
                       $("#alertLibro").css("color","red");
                       $("#alertLibro").html(response.message);
                   }
                   $("#libro_catalogo").prop("disabled",false);
                   $("#libro_proveedor").prop("disabled",false);
               });
       }
    });

    $("#libro_imagen_1").change(function (evt) {
        handleFileSelect(evt,"libro_imagen_empty_1");
    });

    $("#libro_imagen_2").change(function (evt) {
        handleFileSelect(evt,"libro_imagen_empty_2");
    });

    $("#libro_imagen_2").change(function (evt) {
        handleFileSelect(evt,"libro_imagen_empty_3");
    });

    function handleFileSelect(evt,id) {
        var f = evt.target.files[0]; // FileList object
        var reader = new FileReader();
        // Closure to capture the file information.
        reader.onload = (function(theFile) {
            return function(e) {
                var binaryData = e.target.result;
                //Converting Binary Data to base 64
                var base64String = window.btoa(binaryData);
                //showing file converted to base64
                $("#"+id).val(base64String);
            };
        })(f);
        // Read in the image file as a data URL.
        reader.readAsBinaryString(f);
    }


    function deleteLibro(id){
        $("#cont-"+id).remove();
    }

    autosize(document.querySelectorAll('textarea'));
    $("#formCategoria").on("submit",function (form) {
        form.preventDefault();

        var id = 0;

        if($("#categoria_id").val() === ""){
            var data = {
                categoria : $("#categoria").val(),
                detalle : $("#detalle").val()
            };
            id = 1;
        }else {
            var data = {
                id: $("#categoria_id").val(),
                categoria: $("#categoria").val(),
                detalle: $("#detalle").val()
            };
            id = 2;
        }

        if(confirm("Completar Operacion?")){
            fetch('{{url("panel/categoria?id=")}}'+id, {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(data), // data can be `string` or {object}!
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                    console.log(response.status);
                    if (response.status) {
                        $(".alerta").css("color","green").html(response.message);
                        tablaCategoria(response.data);
                    } else {
                        $(".alerta").css("color","red").html(response.message);
                    }
                });
        }
    });

    $("#formProveedor").on("submit",function (form) {
        form.preventDefault();

        var id = 0;

        if($("#proveedor_id").val() === ""){
            var data = {
                nombre : $("#proveedor_nombre").val(),
                direccion : $("#proveedor_direccion").val(),
                telefono : $("#proveedor_telefono").val(),
                tipo : $("#proveedor_tipo").val()
            };
            id = 1;
        }else {
            var data = {
                id: $("#proveedor_id").val(),
                nombre : $("#proveedor_nombre").val(),
                direccion : $("#proveedor_direccion").val(),
                telefono : $("#proveedor_telefono").val(),
                tipo : $("#proveedor_tipo").val()
            };
            id = 2;
        }

        if(confirm("Completar Operacion?")){
            fetch('{{url("panel/proveedor?id=")}}'+id, {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(data), // data can be `string` or {object}!
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                    console.log(response.status);
                    if (response.status) {
                        $(".alerta").css("color","green").html(response.message);
                        tablaProveedor(response.data);
                    } else {
                        $(".alerta").css("color","red").html(response.message);
                    }
                });
        }
    });


    fetch('{{url("panel/proveedor?id=4")}}', {
        method: 'POST', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
                tablaProveedor(response);
            }
        );



   function cargarLibros(){
       fetch('{{url("panel/libro?id=4")}}', {
           method: 'POST', // or 'PUT'
           headers: {
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       }).then(res => res.json())
           .catch(error => console.error('Error:', error))
           .then(response => {
                   tablaLibro(response);
               }
           );
   }


    fetch('{{url("panel/categoria?id=4")}}', {
        method: 'POST', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            tablaCategoria(response);
        }
    );


    function  tablaLibro(data) {
        var string = "";
        for(var i in data){
            string += "<tr id='cont-"+data[i].id+"'>";
            string += "<td>"+data[i].id+"</td>";
            string += "<td>"+data[i].ISBN+"</td>";
            string += "<td>"+data[i].titulo+"</td>";
            string += "<td>"+data[i].descripcion+"</td>";
            string += "<td>"+data[i].autor+"</td>";
            string += "<td>"+data[i].precioCompra+"</td>";
            string += "<td>"+data[i].precioVenta+"</td>";
            string += "<td>"+data[i].cantidadActual+"</td>";
            string += "<td>"+data[i].descuento+"</td>";
            string += "<td><a style='position: relative; right: 50px;' onclick='editLibro("+JSON.stringify(data[i])+")' href='javascript:void(0)' class='btn text-success fa fa-edit fa-fw'>Modificar</a></td>";
            string += "</tr>";
        }
        $("#tableLibro").html(string);
    }

    function tablaCategoria(data) {
        var string = "";
        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].categoria+"</td>";
            string += "<td>"+data[i].detalle+"</td>";
            string += "<td>"+data[i].fecha+"</td>";
            string += "<td><a href='javascript:void(0)' onclick='return editCategoria("+JSON.stringify(data[i])+")' class='btn text-success fa fa-edit fa-fw'>Modificar</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a onclick='deleteCategoria("+data[i].id+")' href='javascript:void(0)' class='btn text-danger fa fa-remove fa-fw'>Eliminar</a></td>";

            string += "<td>"+data[i].id+"</td>";
            string += "</tr>";
        }
        $("#tableCategoria").html(string);
    }


    function tablaCategoria(data) {
        var string = "";
        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].categoria+"</td>";
            string += "<td>"+data[i].detalle+"</td>";
            string += "<td>"+data[i].fecha+"</td>";
            string += "<td><a onclick='delete("+data[i].id+")' href='javascript:void(0)' class='btn text-danger fa fa-remove fa-fw'>Eliminar</a></td>";

            string += "<td>"+data[i].id+"</td>";
            string += "</tr>";
        }
        $("#tableCategoria").html(string);
    }

    function tablaProveedor(data) {
        var string = "";
        for(var i in data){
            var tipo = (data[i].tipo == 1) ? 'editorial' : 'Persona Natural';
            string += "<tr>";
            string += "<td>"+data[i].nombre+"</td>";
            string += "<td>"+data[i].direccion+"</td>";
            string += "<td>"+data[i].telefono+"</td>";
            string += "<td>"+tipo+"</td>";
            string += "<td><a href='javascript:void(0)' onclick='return editProveedor("+JSON.stringify(data[i])+")' class='btn text-success fa fa-edit fa-fw'>Modificar</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a onclick='deleteProveedor("+data[i].id+")' href='javascript:void(0)' class='btn text-danger fa fa-remove fa-fw'>Eliminar</a></td>";
            string += "<td>"+data[i].id+"</td>";
            string += "</tr>";
        }
        $("#tableProveedor").html(string);
    }


    function editCategoria(data) {
        $('#formCategoria').css('display','block');$('#tableLoadingCategoria').css('display','none');
        $("#categoria_id").val(data.id);
        $("#categoria").val(data.categoria);
        $("#detalle").val(data.detalle);
        $(".btn-form-class").val("Actualizar");
    }

    function deleteCategoria(id) {
        if(confirm("Eliminar?")){
            $("#categoria_id").val("");
            fetch('{{url("panel/categoria?id=5")}}', {
                method: 'POST', // or 'PUT'
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify({"id":id}),
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                        $(".alerta").css("color","green").html(response.message);
                        tablaCategoria(response.data);
                    }
                );
        }

    }



    function editProveedor(data) {
        $('#formProveedor').css('display','block');$('#tableLoadingProveedor').css('display','none');
        $("#proveedor_nombre").val(data.nombre);
        $("#proveedor_id").val(data.id);
        $("#proveedor_telefono").val(data.telefono);
        $("#proveedor_direccion").val(data.direccion);
        $(".btn-form-class").val("Actualizar");
    }

    function deleteProveedor(id) {
        if(confirm("Eliminar?")){
            $("#proveedor_id").val("");
            fetch('{{url("panel/proveedor?id=5")}}', {
                method: 'POST', // or 'PUT'
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify({"id":id}),
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                        $(".alerta").css("color","green").html(response.message);
                        tablaProveedor(response.data);
                    }
                );
        }

    }

</script>

</body>

</html>

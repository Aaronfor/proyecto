<?php
session_start();
if($_SESSION['sesion']==1&&isset($_SESSION['sesion'])){

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ventas Victoria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icono.png">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                 <div class="topbar-left">
                    <div class="">
                        <a href="menu.php" class="logo">
                            <img src="assets/images/icono.png" alt="logo" class="logo-lg" />Ventas Vic.
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                             <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="ayuda.php">Ayuda</a></li>
                                <li><a href="contactos.php">Contacto</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">0</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 100px;">
                                          
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                               <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="opciones.php"><i class="ti-settings m-r-10"></i> Opciones</a></li>
                                        <li class="divider"></li>
                                        <li><a href="php/logout.php"><i class="ti-power-off m-r-10"></i> Salir</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a>Aarón L. Sánchez Mtz.</a>
                                     <p class="text-muted m-0">Administratdor</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="menu.php"><i class="ti-home"></i> Menú </a></li>
                               <li><a href="dashboard.php"><i class="menu-icon fa fa-tachometer"></i> Dashboard </a></li>
                                
                              <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-account-card-details"></i> Empleados <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="usuarios.php">usuarios</a></li>
                                        <li><a href="empleado_registro.php">Registro</a></li>
                                        <li><a href="empleado_agregar.php">Agregar</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class=" mdi mdi-barcode-scan"></i> Productos <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="producto_inventario.php">Inventario</a></li>
                                        <li><a href="producto_agregar.php">Agregar</a></li>
                                    </ul>
                                </li>

                                <li><a href="clientes.php"><i class="mdi mdi-clipboard-account"></i> Clientes </a></li>

                               <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class=" mdi mdi-truck-delivery"></i> Pedidos <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="pedidos_ver.php">Ver</a></li>
                                        <li><a href="pedidos_agregar.php">Agregar</a></li>
                                    </ul>
                                </li>
                                <li><a href="ventas.php"><i class="mdi mdi-basket-unfill"></i> Ventas </a></li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-contact-mail"></i> Proveedores <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="prov_ver.php">Ver</a></li>
                                        <li><a href="prov_agregar.php">Agregar</a></li>
                                    </ul>
                                </li>
                                <li><a href="mapa.php"><i class="ti-location-pin"></i> Mapa </a></li>
                                <li><a href="agenda.php"><i class="mdi mdi-calendar-clock"></i> Agenda </a></li>

                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="active">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="true">
                                        Información
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="false">
                                        Editar
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Datos Personales</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Nombre</strong>
                                                        <br>
                                                        <p class="text-muted">Aarón Leonardo Sánchez Martínez.</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Matrícula</strong>
                                                        <br>
                                                        <p class="text-muted">SAMA010797</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted">1530509@upv.edu.mx</p>
                                                    </div>
                                                    <div class="about-info-p m-b-0">
                                                        <strong>Cumpleaños</strong>
                                                        <br>
                                                        <p class="text-muted">01 de Julio</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->
                                        </div>


                                        <div class="col-md-8">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                
                                                <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->
                                                
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Descripción</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <p>Amigable, Trabajador, altura promedio, en una relación.</p>

                                                    <p>Sin alergias, le gusta comer las migadas, es buen programador, vendedor, sabe como convencer a las personas, directo, algo serio.</p>

                                                    <div class="">

                                                        <h5 class="header-title text-uppercase m-t-30 m-b-20">Detalles</h5>

                                                        <div class="m-b-15">
                                                            <h5>Ventas Concretadas<span
                                                                    class="pull-right">85%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="60"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 85%">
                                                                    <span class="sr-only">60% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Faltas en el Año <span
                                                                    class="pull-right">2%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="90"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 2%">
                                                                    <span class="sr-only">90% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Horas Extras <span
                                                                    class="pull-right">50</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="80"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 50%">
                                                                    <span class="sr-only">80% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Editar Perfil</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="col-md-6">
                                                    <label for="FullName">Nombre</label>
                                                    <input type="text" value="Aarón Leonardo Sánchez Martínez" id="FullName" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Email">Email</label>
                                                    <input type="email" value="1530509@upv.edu.mx" id="Email" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Password">Contraseña</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="RePassword">Repetir Contraseña</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                </div>
                                                <div class="row"><br></div>
                                                <div class="col-md-5 col-md-offset-3">
                                                <h3 class="panel-title">Imagen</h3>
                                                <div class="form-group">
                                                    <img src="assets/images/users/avatar-2.jpg" />
                                                    <input type="file" class="filestyle"  data-size="sm">
                                                    
                                                </div> 
                                        </div>
                                                <br>
                                                <div class="col-md-11">
                                                    <label for="RePassword">Descripción</label>
                                                    <textarea style="height: 125px" id="AboutMe" class="form-control">Amigable, Trabajador, altura promedio, en una relación.
Sin alergias, le gusta comer las migadas, es buen programador, vendedor, sabe como convencer a las personas, directo, algo serio.</textarea>
                                                </div>
                                                <div class="col-md-3">
                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Guardar</button>
                                                    </div>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div>
                            <strong>Ventas Victoria</strong> - Copyright &copy; 2017
                        </div>
                    </div><!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        
         <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php
}else{
    header('Location: index.php');
}
?>
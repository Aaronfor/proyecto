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

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />


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
                        <a href="index.html" class="logo">
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
                        
                                    <h4 class="header-title m-t-0">Agregar nuevo Empleado</h4>

                                        <form action="#" class="form-validation">
                                            
                                            
                                                <div class="row">
                                                <div class="col-md-7">
                                                    <p></p>
                                                    <p></p>
                                                <label >Nombre(s)<span class="text-danger"></span></label>
                                                <input name="nombre" required class="form-control">
                                                   <p></p>
                                                <label>Apellido Paterno<span class="text-danger"></span></label>
                                                <input name="marca" required class="form-control">
                                            <p></p>
                                               
                                                <label>Apellido Materno<span class="text-danger"></span></label>
                                                <input name="marca" required class="form-control">
                                                <p></p>
                                               <div class="col-md-5">
                                                <label>Teléfono Casa<span class="text-danger"></span></label>
                                                <input name="marca" required class="form-control">
                                                    
                                                </div>
                                                    <div class="col-md-5">
                                                <label>Teléfono Celular<span class="text-danger"></span></label>
                                                <input name="marca" required class="form-control">
                                                    
                                                </div>
                                                
                                                </div>
                                                <div class="col-md-3 col-md-offset-1">
                                                    
                                                    
                                                <label class="col-md-2 control-label">Matrícula</label>
                                               
                                                    <input type="text" class="form-control" readonly="" value="----------">
                                                
                                           
                                                    
                                                    <img src="assets/images/no_photo.jpg" />
                                                    <label class="control-label">Imagen</label>
                                                    <input type="file" class="filestyle"  data-size="sm">
                                                    
                                                </div> 
                                                    </div>
                                           
                                            
                                            <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Curp<span class="text-danger"></span></label>
                                                <input required name="codigobarras" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col-md-5 ">
                                             <div class="form-group" >
                                                <label>NSS<span class="text-danger"></span></label>
                                                <input name="precio_compra" required placeholder="" class="form-control">
                                            </div>
                                            </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                            <div class="col-md-2">
                                                <label>Tipo de Sangre<span class="text-danger"></span></label>
                                            <select class="form-control">
                                            <option></option>
                                                <option value="o+">A+</option>
                                                <option value="o+">A-</option>
                                                <option value="o+">B+</option>
                                                <option value="o+">B-</option>
                                                <option value="o+">O+</option>
                                                <option value="o-">O-</option>
                                                <option value="ab">AB+</option>
                                                <option value="ab-">AB-</option>
                                            </select>
                                            </div>
                                            <div class="col-md-3">
                                                 <div class="form-group" >
                                                <label>Fecha Nac.<span class="text-danger"></span></label>
                                                      <div class="form-group">
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mes/dia/año" id="datepicker-autoclose">
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                            </div>
                                            </div> 
                                                <label class="col-md-4">Alergias</label>
                                          
                                                <div class="col-md-5">
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                        </div>
                                            <p></p>
                                            <div class="row">&nbsp;&nbsp; Dirección</div>
                                            <br>
                                            
                                        
                                            <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Colonia<span class="text-danger"></span></label>
                                                <input required name="codigobarras" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col-md-4 ">
                                             <div class="form-group" >
                                                <label>Calle<span class="text-danger"></span></label>
                                                <input name="precio_compra" required placeholder="" class="form-control">
                                            </div>
                                            </div>
                                                
                                            
                                                
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CP<span class="text-danger"></span></label>
                                                <input required name="codigobarras" class="form-control">
                                            </div>
                                            </div>
                                                <div class="col-md-4">
                                            <div class="form-group col-md-offset-6" >
                                                <label>Número Interior<span class="text-danger"></span></label>
                                                <input name="precio_venta" required placeholder="" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col-md-2 col-md-offset-2">
                                            <div class="form-group" >
                                                <label>Número Exterior<span class="text-danger"></span></label>
                                                <input name="precio_venta" required placeholder="" class="form-control">
                                            </div>
                                            </div>
                                            
                                            </div>
                                            <br>
                                            <br>
                                            
                                            <div class="row">
                                            <div class="col-md-5">
                                             <div class="form-group" >
                                                <label>Correo<span class="text-danger"></span></label>
                                                <input name="precio_venta" type="email" required placeholder="" class="form-control">
                                            </div>
                                            </div>
                                                
                                            <div class="col-md-3">
                                                 <div class="form-group" >
                                                <label>Sueldo<span class="text-danger"></span></label>
                                                <input name="precio_venta" required placeholder="$" class="form-control">
                                            </div>
                                            </div> 
                                            <div class="col-md-3">
                                                 <div class="form-group" >
                                                <label>Puesto<span class="text-danger"></span></label>
                                                <input name="precio_venta" required placeholder="" class="form-control">
                                            </div>
                                            </div> 
                                            </div>
                                            <div class="row">
								<div class="p-20 m-b-5">
									<h4 class="m-b-30 m-t-0 header-title">Descricpión de la persona</h4>
									<div class="summernote">
										
									</div>
                              </div>
                                            </div>
                                            
                                            <div class="row ">
                                            <div class="form-group text-right">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                    Guardar
                                                </button>
                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                    Cancelar
                                                </button>
                                            </div>
                                            </div>

                                        </form>
                                   
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div>
                            <strong>Ventas Victoria</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

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

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
     	<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-validation').parsley();
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>

    </body>
</html>
<?php
}else{
    header('Location: index.php');
}
?>
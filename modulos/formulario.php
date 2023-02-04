<?php
include('../metodos/conexion.php');
session_start();
$id = $_SESSION['Id'];
$nombre = $_SESSION['Nombres'];
if (!empty($_SESSION['estado'])) {

?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" href="../images/fevicon/fevicon.png" type="image/png" />
        <title>Compra</title>
        <!-- This page plugin CSS -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert2@7.0.9/dist/sweetalert2.all.js"></script>
    </head>

    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md">
                    <div class="navbar-header" data-logobg="skin6">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <div class="navbar-brand">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../images/Logo_L&P.png" alt="homepage" class="dark-logo" width="200px" />
                            </b>
                            <!--End Logo icon -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">

                        <h2 style="padding-left:20px;"><span>Bienvenido usuario <?php echo $nombre ?></h4>

                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar" data-sidebarbg="skin6">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="principal.php" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Inicio</span></a></li>
                            <li class="list-divider"></li>
                            <li class="nav-small-cap"><span class="hide-menu">Opciones</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link" href="datosUsuarios.php" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Datos Personales</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="formulario.php" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Registrar Venta</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="detalleCompras.php" aria-expanded="false"><i data-feather="trending-up" class="feather-icon"></i><span class="hide-menu">Ventas</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../metodos/cerrarSesion.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Salir</span></a></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <div class="container-fluid">

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-tag"></i> REGISTRO DE COMPRAS Y VENTAS DE CONTADO
                        </div>
                        <div class="card-body">
                            <div class="modal-body">
                                <form action="../metodos/aggCompra.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputnombre">Detalle</label>
                                            <input type="hidden" name="cliente" value="<?php echo $id ?>">
                                            <input type="text" name="detalle" class="form-control" id="inputnombre" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputelefono">Consecutivo</label>
                                            <input type="text" name="consecutivo" class="form-control" id="inputelefono" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputdireccion">Ingresos</label>
                                            <input type="text" name="ingresos" class="form-control" id="inputdireccion" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputdireccion">Egresos</label>
                                            <input type="text" name="egresos" class="form-control" id="inputdireccion" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputelefono">Fecha</label>
                                            <input type="date" name="fecha" class="form-control" id="inputelefono" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputdireccion">Tercero</label>
                                            <input type="text" name="tercero" class="form-control" id="inputdireccion" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                Diseñado por<a href="https://www.facebook.com/solucionestecnologicasid"> Soluciones Tecnologicas</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="dist/js/app-style-switcher.js"></script>
        <script src="dist/js/feather.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <!-- themejs -->
        <!--Menu sidebar -->
        <script src="dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
        <!--table-->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>

    </html>
<?php } else {
    header("location: login.php");
} ?>
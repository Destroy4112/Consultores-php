<?php
include('../metodos/conexion.php');
session_start();
$rol = $_SESSION['Rol'];
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
        <title>Principal</title>
        <!-- This page plugin CSS -->
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">
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
                            <?php if ($rol == 1) { ?>
                                <li class="sidebar-item"> <a class="sidebar-link" href="usuarios.php" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Usuarios</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="noticias.php" aria-expanded="false"><i data-feather="layout" class="feather-icon"></i><span class="hide-menu">Noticias</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="videos.php" aria-expanded="false"><i data-feather="film" class="feather-icon"></i><span class="hide-menu">Videos</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="compras.php" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Compras</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../metodos/cerrarSesion.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Salir</span></a></li>
                            <?php } else { ?>
                                <li class="sidebar-item"> <a class="sidebar-link" href="datosUsuarios.php" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Datos Personales</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="formulario.php" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Registrar Venta</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="detalleCompras.php" aria-expanded="false"><i data-feather="trending-up" class="feather-icon"></i><span class="hide-menu">Ventas</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../metodos/cerrarSesion.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Salir</span></a></li>
                            <?php } ?>
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

                    <img src="../images/Logo L&P-03.jpg" alt="" style="width: 100%;">

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
    </body>

    </html>
<?php } else {
    header("location: login.php");
} ?>
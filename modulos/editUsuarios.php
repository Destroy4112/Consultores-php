<?php
include('../metodos/conexion.php');
$id = $_GET['id'];
session_start();
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
        <title>Usuarios</title>
        <!-- This page plugin CSS -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
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
                            <li class="sidebar-item"> <a class="sidebar-link" href="usuarios.php" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Usuarios</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="noticias.php" aria-expanded="false"><i data-feather="layout" class="feather-icon"></i><span class="hide-menu">Noticias</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="videos.php" aria-expanded="false"><i data-feather="film" class="feather-icon"></i><span class="hide-menu">Videos</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="compras.php" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Compras</span></a></li>
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

            <?php
            $sql = "Select * from usuarios where id=$id";
            $result = mysqli_query($conexion, $sql);

            foreach ($result as $row) { ?>
                ?>

                <div class="page-wrapper">
                    <div class="container-fluid">

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user"></i> <?php echo $row['Nombres'] . " " . $row['Apellidos'] ?>
                            </div>
                            <div class="card-body">

                                <form action="../metodos/actualizarUser.php" method="post">
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <label for="inputnombre">Nombres</label>
                                                <input type="text" name="nombre" class="form-control" id="inputnombre" placeholder="Ingrese los nombres..." value="<?php echo $row['Nombres'] ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputapellidos">Apellidos</label>
                                                <input type="text" name="apellidos" class="form-control" id="inputapellidos" placeholder="Ingrese los apellidos..." value="<?php echo $row['Apellidos'] ?>">
                                            </div>
                                        </div>
                                        <label>Correo</label>
                                        <input type="email" name="correo" class="form-control" placeholder="Ingrese el correo...." value="<?php echo $row['Correo'] ?>"><br>
                                        <label>Contraseña</label>
                                        <input type="password" name="clave" class="form-control" placeholder="Ingrese la clave...." value="<?php echo $row['Clave'] ?>"><br>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputelefono">Telefono</label>
                                                <input type="text" name="telefono" class="form-control" id="inputelefono" placeholder="Ingrese el telefono...." value="<?php echo $row['Telefono'] ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputdireccion">Direccion</label>
                                                <input type="text" name="direccion" class="form-control" id="inputdireccion" placeholder="Ingrese la direccion...." value="<?php echo $row['Direccion'] ?>">
                                            </div>
                                        </div>
                                         <input type="hidden" name="rol" value="<?php echo $row['Rol'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Actualizar">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            <?php } ?>
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
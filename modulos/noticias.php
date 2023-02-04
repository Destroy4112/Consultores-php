<?php
include('../metodos/conexion.php');
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
        <title>Noticias</title>
        <!-- This page plugin CSS -->
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/noticias.css">
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
            <div class="page-wrapper">
                <div class="container-fluid">

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-newspaper"></i> Noticias
                            <button type="button" style="float: right; border-radius:100px; height: 50px; width:50px" class="btn btn-primary" data-toggle="modal" data-target="#agregarUsuario" title="Agregar">
                                <i class="fas fa-plus" style="color: white;"></i>
                            </button>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <?php

                                function obtenerFechaEnLetra($fecha)
                                {

                                    $num = date("j", strtotime($fecha));
                                    $anno = date("Y", strtotime($fecha));
                                    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
                                    $mes = $mes[(date('m', strtotime($fecha)) * 1) - 1];
                                    return $num . ' de ' . $mes . ' del ' . $anno;
                                }
                                ?>

                                <?php $sql = "SELECT * FROM noticias";
                                $result = mysqli_query($conexion, $sql);

                                foreach ($result as $row) {

                                    $fecha = $row['Fecha']; ?>

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="card-content">
                                            <div class="card-img">
                                                <img src="../images/noticias/<?php echo $row['Imagen']; ?>" style="height: 250px;width: 100%;sobject-fit: cover;" alt="">
                                            </div>
                                            <div class="card-desc">
                                                <h3><?php echo $row['Titulo'] ?></h3>
                                                <p style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                    <?php echo $row['Descripcion'] ?></p>
                                                <i class="fa fa-calendar"></i> <?php echo obtenerFechaEnLetra($fecha); ?>
                                                <br><br>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-arrow-right" title="Leer"></i></a>
                                                    <a href='editNoticia.php?cod="<?php echo $row['id'] ?>"' class="btn btn-success"><i class="fa fa-edit" title="Editar"></i></a>
                                                    <a href='../metodos/eliminarNoticia.php?cod="<?php echo $row['id'] ?>"' class="btn btn-danger eliminar"><i class="fa fa-trash" title="Eliminar"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <?php if (isset($_GET['msj'])) {
                $alert = $_GET['msj'];
                if ($alert == "vacio") { ?>
                    <script>
                        swal({
                            title: "Error",
                            text: "campos vacios",
                            type: "error",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    </script>

                <?php } else if ($alert == "agregar") { ?>
                    <script>
                        swal({
                            title: "Muy bien!!",
                            text: "Noticia agregada con exito.",
                            type: "success",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2500

                        });
                    </script>
                <?php } else if ($alert == "actualizar") { ?>
                    <script>
                        swal({
                            title: "Muy bien!!",
                            text: "Noticia actualizada correctamente.",
                            type: "success",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2500

                        });
                    </script>
                <?php } else if ($alert == "eliminar") { ?>
                    <script>
                        swal({
                            title: "Muy bien!!",
                            text: "Noticia eliminada con exito.",
                            type: "success",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2500

                        });
                    </script>
                <?php } else if ($alert == "error") { ?>
                    <script>
                        swal({
                            title: "Error",
                            text: "Error al crear la Noticia",
                            type: "error",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    </script>
                <?php } ?>
            <?php } ?>
            <script>
                $(".eliminar").click(function(e) {
                    e.preventDefault(); // Prevent the href from redirecting directly
                    var linkURL = $(this).attr("href");
                    EliminarConfirmar(linkURL);
                });

                function EliminarConfirmar(linkURL) {
                    swal({
                        title: "Estas seguro que quiere eliminar esta Noticia?",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonColor: "#EC4748",
                        confirmButtonColor: "#209644",
                        cancelButtonText: "No",
                        confirmButtonText: "Si"
                    }).then(function(result) {
                        console.log(result);
                        if (result.value) {
                            window.location.href = linkURL;
                        } else {
                            swal({
                                title: "Cancelado!!",
                                type: "error",
                                showCancelButton: false,
                                showConfirmButton: true,
                                confirmButtonColor: "#185ABD",
                                confirmButtonText: "Ok"

                            });
                        }
                    });
                }
            </script>


            <!-- Modal -->
            <div class="modal fade" id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Crear noticia</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../metodos/aggNoticias.php" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <label>Titulo</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Ingrese el titulo...."><br>
                                <label>Imagen</label>
                                <input type="file" name="imagen" class="form-control"><br>
                                <label>Descripcion</label>
                                <textarea name="descripcion" class="form-control"></textarea><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Modal -->
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
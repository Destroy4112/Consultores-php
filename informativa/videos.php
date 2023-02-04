<?php
include('../metodos/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Videos</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icons -->
      <link rel="icon" href="../images/fevicon/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../css/responsive.css" />
      <!-- colors css -->
      <link rel="stylesheet" href="../css/colors.css" />
      <!-- wow animation css -->
      <link rel="stylesheet" href="../css/animate.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="default_theme" class="team">
      <!-- header -->
      <header class="header header_style1">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-lg-10">
                  <div class="logo"><img src="../images/Logo_L&P.png" alt="#" /></div>
                  <div class="main_menu float-right">
                     <div class="menu">
                        <ul class="clearfix">
                           <li><a href="../index.php">Inicio</a></li>                           
                           <li><a href="noticias.php">Noticias</a></li>
                           <li class="active"><a href="videos.php">Videos</a></li>
                           <li><a href="service.php">Servicios</a>
                              <ul>
                                 <li><a href="contable.php">C. Contables y Tributarias</a></li>
                                 <li><a href="administrativa.php">Consulta administrativas</a></li>
                                 <li><a href="seguros.php">Asesoria de seguros</a></li>
                             </ul>
                           </li>
                           <li><a href="nosotros.php">Nosotros</a></li>
                           <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-lg-2">
                  <div class="right_bt"><a class="bt_main" href="../modulos/login.php">Iniciar Sesion</a> </div>
               </div>
            </div>
         </div>
      </header>
      <section id="banner_parallax" class="inner_page_banner slide_banner1">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="slide_cont">
                        <h2>Videos</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end header -->
       <!-- section -->
<!-- details card section starts from here -->
<section class="details-card" style="margin-top: -150px;">
   <div class="container">
       <div class="row">
       <?php  $sql = "SELECT * FROM videos";
              $result = mysqli_query($conexion, $sql);

               foreach ($result as $row) { ?>
           <div class="col-md-6">
               <div class="card-content">
                   <div class="card-img">
                   <iframe width="560" height="315" src="<?php echo $row['Link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                   <div class="card-desc">
                       <h3><?php echo $row['Titulo'] ?></h3> 
                   </div>
               </div>
           </div>
           <?php } ?>
       </div>
   </div>
</section>
<!-- details card section starts from here -->
      <!-- end section -->
      
       <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Menu</h5>
					<ul class="list-unstyled quick-links">
						   <li><a href="../index.php">Inicio</a></li>                           
                     <li><a href="noticias.php">Noticias</a></li>
                     <li><a href="videos.php">Videos</a></li>
                     <li><a href="service.php">Servicios</a></li>
                     <li><a href="nosotros.php">Nosotros</a></li>
                     <li><a href="contacto.php">Contacto</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-1 col-md-1">
					
				</div>
            <div class="col-xs-16 col-sm-4 col-md-4">
					<h5>Contactanos</h5>
					<ul class="list-unstyled quick-links">
						<li><a>CALLE 20 # 19-27 - CENTRO OF C6</a></li>
                  <li><a>Sincelejo - Sucre</a></li>
                  <li><a>asesoriasintegrales@lpconsultoresempresariales.com</a></li>
						<li><a>310-5117781 - 301-2033971</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="h6">© All right Reversed. L&P Consultores</p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
      <!--=========== js section ===========-->
      <!-- jQuery (necessary for Bootstrap's JavaScript) -->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../js/wow.js"></script>
      <!-- custom js -->
      <script src="../js/custom.js"></script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>
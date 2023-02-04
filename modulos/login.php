<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="icon" href="../images/fevicon/fevicon.png" type="image/png" />
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="../images/wave.png">
	<div class="container">
		<div class="img">
			<img src="../images/Logo_L&P.png">
		</div>
		<div class="login-content">

			<form action="../metodos/validar.php" method="POST">
				<img src="../images/avatar.svg">
				<h2 class="title">Iniciar Sesión</h2>
				<?php if (isset($_GET['error'])) { ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_GET['error'];
						?>
					</div>
				<?php } ?>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Correo</h5>
						<input type="email" class="input" name="correo">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="clave">
					</div>
				</div>
				<input type="submit" class="btn" value="Ingresar">
				<br>
				<a href="../index.php"><i class="fas fa-reply"></i>&nbsp; Volver a la plataforma</a>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="../js/main.js"></script>
</body>

</html>
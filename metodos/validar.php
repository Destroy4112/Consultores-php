<?php 

require 'conexion.php';

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$correo = validate($_POST['correo']);
$clave = validate($_POST['clave']);

if(empty($correo)){
	header ("location: ../modulos/login.php?error=Usuario requerido");
    exit();
}else if(empty($clave)){
	header ("location: ../modulos/login.php?error=Contraseña requerida");
    exit();
}

$q = "SELECT * from usuarios where Correo = '$correo' and Clave = '$clave'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);


if($array!=null){
	session_start();
	$_SESSION['Id']=$array['id'];
	$_SESSION['Nombres']=$array['Nombres'];
	$_SESSION['Rol']=$array['Rol'];
	$_SESSION['estado']=true;
	
	header ("location: ../modulos/principal.php");
	
}else{
	header ("location: ../modulos/login.php?error= Datos erroneos");
}

 ?>
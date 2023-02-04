<?php 

require 'conexion.php';

$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$correo= $_POST['correo'];
$clave= $_POST['clave'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];

if($nombre==null || $apellidos==null || $correo==null || $clave==null || $telefono==null || $direccion ==null){
$msj = 'vacio'; 
}else{

$sql ="INSERT INTO usuarios (Nombres,Apellidos,Correo,Clave,Telefono,Direccion,Rol) 
values ('$nombre','$apellidos','$correo','$clave','$telefono','$direccion',2)";
$res = mysqli_query($conexion, $sql);

if($res != null){
    $msj = 'agregar';
  }else{
    $msj = 'error';
  }
}

header ("location: ../modulos/usuarios.php?msj=$msj");

?>
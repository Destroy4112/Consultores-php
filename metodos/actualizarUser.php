<?php 

 require 'conexion.php';

  $id = $_POST['id'];
  $nombre= $_POST['nombre'];
  $apellidos= $_POST['apellidos'];
  $correo= $_POST['correo'];
  $clave= $_POST['clave'];
  $telefono= $_POST['telefono'];
  $direccion= $_POST['direccion'];
  $rol = $_POST['rol']; 
    
   $actualizar ="UPDATE usuarios SET id='$id', Nombres='$nombre', Apellidos='$apellidos', Correo='$correo',
    Clave='$clave', Telefono='$telefono', Direccion='$direccion', Rol='$rol' WHERE id='$id'";
   mysqli_query($conexion, $actualizar);

   $msj = 'actualizar';
        
   header ("location: ../modulos/usuarios.php?msj=$msj");

?>
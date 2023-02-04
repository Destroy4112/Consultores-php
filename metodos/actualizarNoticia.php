<?php 

 require 'conexion.php';

  $id = $_POST['id'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
    
   $actualizar ="UPDATE noticias SET  Titulo='$titulo', Descripcion='$descripcion' WHERE id='$id'";
   mysqli_query($conexion, $actualizar);

   $msj = 'actualizar';
        
   header ("location: ../modulos/noticias.php?msj=$msj");

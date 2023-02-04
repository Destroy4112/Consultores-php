<?php

include ('conexion.php');

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$archivo = $_FILES['imagen']['name'];

if($titulo==null || $descripcion==null || $archivo==null){
   $msj = 'vacio'; 
   }else{

 if(isset($archivo) && $archivo != ""){
    $tipo = $_FILES['imagen']['type'];
    $temp  = $_FILES['imagen']['tmp_name'];

    
    $sql ="INSERT INTO noticias (Titulo,Imagen,Descripcion) values 
    ('$titulo','$archivo','$descripcion')";
    $res = mysqli_query($conexion, $sql);

    move_uploaded_file($temp,'../images/noticias/'.$archivo);  
 }
    if($res != null){
      $msj = 'agregar';
    }else{
      $msj = 'error';
    }
  }

    header ("location: ../modulos/noticias.php?msj=$msj");
 
 ?>
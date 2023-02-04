<?php 

require 'conexion.php';

$titulo= $_POST['titulo'];
$link= $_POST['link'];

if($titulo==null || $link==null){
$msj = 'vacio'; 
}else{

$sql ="INSERT INTO videos (Titulo, Link) 
values ('$titulo','$link')";
$res = mysqli_query($conexion, $sql);

if($res != null){
    $msj = 'agregar';
  }else{
    $msj = 'error';
  }
}

header ("location: ../modulos/videos.php?msj=$msj");

?>
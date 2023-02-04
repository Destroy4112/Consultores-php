<?php
require 'conexion.php';
     
if(isset($_GET['cod'])){

    $id=$_GET['cod'];

    $query = "DELETE FROM usuarios where id = $id";
    $result = mysqli_query($conexion,$query);
    $msj='eliminar';

    if(!$result){
        die('error al eliminar');
        $msj ='error';
    }
    header ("location: ../modulos/usuarios.php?msj=$msj");

}
?>
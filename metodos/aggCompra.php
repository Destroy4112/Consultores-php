<?php 

require 'conexion.php';

$cliente = $_POST['cliente'];
$detalle = $_POST['detalle'];
$consecutivo = $_POST['consecutivo'];
$ingresos = $_POST['ingresos'];
$egresos = $_POST['egresos'];
$fecha = $_POST['fecha'];
$tercero = $_POST['tercero'];

$sql ="INSERT INTO compras (Detalle, Consecutivo, Ingreso, Egreso, Tercero, id_cliente, Fecha) 
values ('$detalle','$consecutivo','$ingresos','$egresos','$tercero',$cliente,'$fecha')";
$res = mysqli_query($conexion, $sql);

if($res != null){
    $msj = 'agregar';
  }else{
    $msj = 'error';
  }

  header ("location: ../modulos/detalleCompras.php?msj=$msj");

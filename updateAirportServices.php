<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_servicio = $_POST['id_update'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$ubicacion = $_POST['ubicacion'];
$sql = "UPDATE airportServices
SET  nombre = '$nombre',  tipo = '$tipo',  ubicacion = '$ubicacion' 
WHERE id_servicio = '$id_servicio'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: airportServices.php");
}

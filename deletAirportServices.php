<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_servicio = $_POST['id_delete'];

$sql = "DELETE FROM airportServices WHERE id_servicio='$id_servicio'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: airportServices.php");
}

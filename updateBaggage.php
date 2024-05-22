<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_equipaje = $_POST['id_update'];
$id_pasajero = $_POST['id_pasajero'];
$numero_vuelo = $_POST['numero_vuelo'];
$estado = $_POST['estado'];
$sql = "UPDATE baggage
SET  id_pasajero = '$id_pasajero',  numero_vuelo = '$numero_vuelo',  estado = '$estado' 
WHERE id_equipaje = '$id_equipaje'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: baggage.php");
}

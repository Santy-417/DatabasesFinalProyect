<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_personal = $_POST['id_delete'];

$sql = "DELETE FROM vuelos WHERE id_vuelo='$id_vuelo'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: flights.php");
}

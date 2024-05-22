<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_pasajero = $_POST['id_delete'];

$sql = "DELETE FROM Passengers WHERE id_pasajero='$id_pasajero'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: passengers.php");
}

<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$cliente = $_POST['cliente'];
$vuelo = $_POST['vuelo'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];

$sql = "INSERT INTO Reservas (ClienteID, VueloID, FechaReserva, Estado, Creado_En) VALUES ('$cliente', '$vuelo', '$fecha', '$estado', CURDATE())";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: reserva.php");
}

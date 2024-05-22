<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$numero_vuelo = $_POST['numero_vuelo'];
$aerolinea = $_POST['aerolinea'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha_salida = $_POST['fecha_salida'];
$hora_salida = $_POST['hora_salida'];
$estado = $_POST['estado'];
$puerta_embarque = $_POST['puerta_embarque'];

$sql = "INSERT INTO flights (numero_vuelo, aerolinea, origen, destino, fecha_salida, hora_salida, estado, puerta_embarque) VALUES ('$numero_vuelo', '$aerolinea', '$origen', '$destino', '$fecha_salida', '$fecha_salida', '$estado', '$puerta_embarque')";
$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: flights.php");
}

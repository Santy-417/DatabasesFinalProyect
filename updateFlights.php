<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_vuelo = $_POST['id_update'];
$numero_vuelo = $_POST['numero_vuelo'];
$aerolinea = $_POST['aerolinea'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha_salida = $_POST['fecha_salida'];
$hora_salida = $_POST['hora_salida'];
$estado = $_POST['estado'];
$puerta_embarque = $_POST['puerta_embarque'];

$sql = "UPDATE flights
SET  numero_vuelo = '$numero_vuelo',  aerolinea = '$aerolinea',  origen = '$origen', destino = '$destino', fecha_salida = '$fecha_salida', hora_salida = '$hora_salida', estado = '$estado', puerta_embarque = '$puerta_embarque' 
WHERE id_vuelo = '$id_vuelo'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: flights.php");
}

<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_pasajero = $_POST['id_pasajero'];
$numero_vuelo = $_POST['numero_vuelo'];
$estado = $_POST['estado'];

$sql = "INSERT INTO baggage (id_pasajero, numero_vuelo, estado) VALUES ('$id_pasajero', '$numero_vuelo', '$estado')";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: baggage.php");
}

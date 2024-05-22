<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$ubicacion = $_POST['ubicacion'];

$sql = "INSERT INTO airportServices (nombre, tipo, ubicacion) VALUES ('$nombre', '$tipo', '$ubicacion')";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: airportServices.php");
}

<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$documento_identidad = $_POST['documento_identidad'];

$sql = "INSERT INTO passengers (nombre, apellido, fecha_nacimiento, documento_identidad) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$documento_identidad')";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: passengers.php");
}

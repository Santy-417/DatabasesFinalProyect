<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_pasajero = $_POST['id_update'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$documento_identidad = $_POST['documento_identidad'];
$sql = "UPDATE Passengers
SET  nombre = '$nombre',  apellido = '$apellido',  fecha_nacimiento = '$fecha_nacimiento', documento_identidad = '$documento_identidad' 
WHERE id_pasajero = '$id_pasajero'";


$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: passengers.php");
}

<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$departamento = $_POST['departamento'];
$sql = "INSERT INTO personal (nombre, apellido, puesto, departamento) VALUES ('$nombre', '$apellido', '$puesto', '$departamento')";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: personal.php");
}

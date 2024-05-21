<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_personal = $_POST['id_update'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$departamento = $_POST['departamento'];
$sql = "UPDATE personal
SET  nombre = '$nombre',  apellido = '$apellido',  puesto = '$puesto', departamento = '$departamento' 
WHERE id_personal = '$id_personal'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: personal.php");
}

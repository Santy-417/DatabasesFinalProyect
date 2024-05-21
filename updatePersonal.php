<?php
include('conexion_bd.php');
//ESTA SENTENCIA ESTABLECE UNA CONEXIÓN CON LA BASE DE DATOS
$conexion = conexion_bd();

$id_personal = $_POST['id_update'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$departamento = $_POST['departamento'];
//ESTA INSTURCCION CONSTRUYE EL UPDATE PARA LA TABLA CLIENTES
$sql = "UPDATE personal
SET  nombre = '$nombre',  apellido = '$apellido',  puesto = '$puesto', departamento = '$departamento' 
WHERE id_personal = '$id_personal'";
//echo $sql;
//EJECUTA EL SQL EN LA BASE DE DATOS ESTABLECIDA EN LA CONEXIÓN
$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: personal.php");
}

<?php
include('conexion_bd.php');
//ESTA SENTENCIA ESTABLECE UNA CONEXIÓN CON LA BASE DE DATOS
$conexion = conexion_bd();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$departamento = $_POST['departamento'];
//ESTA INSTURCCION CONSTRUYE EL INSERT PARA LA TABLA CLIENTES
$sql = "INSERT INTO personal (nombre, apellido, puesto, departamento) VALUES ('$nombre', '$apellido', '$puesto', '$departamento')";
//echo $sql;
//EJECUTA EL SQL EN LA BASE DE DATOS ESTABLECIDA EN LA CONEXIÓN
$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: flights.php");
}

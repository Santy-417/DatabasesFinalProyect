<?php
include('conexion_bd.php');
//ESTA SENTENCIA ESTABLECE UNA CONEXIÓN CON LA BASE DE DATOS
$conexion = conexion_bd();

$id_personal = $_POST['id_delete'];
//echo $id_personal;

$sql = "DELETE FROM personal WHERE id_personal='$id_personal'";
//echo $sql;
//EJECUTA EL SQL EN LA BASE DE DATOS ESTABLECIDA EN LA CONEXIÓN
$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: flights.php");
}

<?php
include('conexion_bd.php');
//ESTA SENTENCIA ESTABLECE UNA CONEXIÓN CON LA BASE DE DATOS
$conexion = conexion_bd();

$numero_vuelo = $_POST['numero_vuelo'];
$aerolinea = $_POST['aerolinea'];
$origen = $_POST['origen'];
$origen = $_POST['departamento'];
$departamento = $_POST['departamento'];
$departamento = $_POST['departamento'];
$departamento = $_POST['departamento'];
$departamento = $_POST['departamento'];
//ESTA INSTURCCION CONSTRUYE EL INSERT PARA LA TABLA CLIENTES
$sql = "INSERT INTO vuelos (numero_vuelo, aerolinea, origen, departamento) VALUES ('$numero_vuelo', '$aerolinea', '$origen', '$departamento')";
//echo $sql;
//EJECUTA EL SQL EN LA BASE DE DATOS ESTABLECIDA EN LA CONEXIÓN
$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: flights.php");
}

<?php
include('conexion_bd.php');
//ESTA SENTENCIA ESTABLECE UNA CONEXIÓN CON LA BASE DE DATOS
$conexion = conexion_bd();

$cliente = $_POST['cliente'];
$vuelo = $_POST['vuelo'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];

//ESTA INSTURCCION CONSTRUYE EL INSERT PARA LA TABLA CLIENTES
$sql = "INSERT INTO Reservas (ClienteID, VueloID, FechaReserva, Estado, Creado_En) VALUES ('$cliente', '$vuelo', '$fecha', '$estado', CURDATE())";
//echo $sql;
//EJECUTA EL SQL EN LA BASE DE DATOS ESTABLECIDA EN LA CONEXIÓN
$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: reserva.php");
}

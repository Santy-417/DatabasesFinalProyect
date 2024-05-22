<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_equipaje = $_POST['id_delete'];

$sql = "DELETE FROM baggage WHERE id_equipaje='$id_equipaje'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: baggage.php");
}

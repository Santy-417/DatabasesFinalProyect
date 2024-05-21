<?php
include('conexion_bd.php');
$conexion = conexion_bd();

$id_personal = $_POST['id_delete'];

$sql = "DELETE FROM personal WHERE id_personal='$id_personal'";

$consulta = mysqli_query($conexion, $sql);

if ($conexion) {
    header("Location: personal.php");
}

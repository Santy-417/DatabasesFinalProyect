<?php
function conexion_bd()
{
   $servidor = "localhost";
   $usuario = "root";
   $password = "";
   $bd = "bd6316";

   $conn = mysqli_connect($servidor, $usuario, $password);
   mysqli_select_db($conn, $bd);
   return $conn;
}

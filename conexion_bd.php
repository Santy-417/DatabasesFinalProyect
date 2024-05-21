<?php
//FUNCION PERMITE ESTABLECER UNA CONEXION CON LA BASE DE DATOS
function conexion_bd()
{
   $servidor = "localhost";
   $usuario = "root";
   $password = "";
   $bd = "aeropuerto";

   //GENERAR LA CONEXION
   $conn = mysqli_connect($servidor, $usuario, $password);
   mysqli_select_db($conn, $bd);
   return $conn;
}

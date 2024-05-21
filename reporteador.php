<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <title>Reporteador</title>
   <link rel="stylesheet" href="estilos.css">
</head>

<body>

   <?php
   include('conexion_bd.php');
   //ESTA SENTENCIA ESTABLECE UNA CONEXIÓN CON LA BASE DE DATOS
   $conexion = conexion_bd();

   $sql = "SHOW TABLES";

   $consulta = mysqli_query($conexion, $sql);

   echo "<table id='miTabla'>";
   //SEGMENTO DE CÓDIGO QUE MUESTRA EN PANTALLA LOS ENCABEZADOS DE LA CONSULTA
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
   //FIN SEGMENTO DE CÓDIGO QUE MUESTRA EN PANTALLA LOS ENCABEZADOS DE LA CONSULTA

   if ($consulta) {
      while ($fila = mysqli_fetch_array($consulta)) {
         echo "<tr>";
         for ($i = 0; $i < $consulta->field_count; $i++) {
            echo "<td>" . $fila[$i] . "</td>";
         }
         echo "</tr>";
      }
   } else {
      echo "Error en la consulta.....";
   }
   echo "</table>";
   ?>
</body>

</html>
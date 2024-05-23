<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <title>Reporteador</title>
   <link rel="stylesheet" href="style2.css">
</head>

<body background="gray">

   <?php
   include('conexion_bd.php');
   // ESTABLECEMOS UNA CONEXIÓN CON LA BASE DE DATOS
   $conexion = conexion_bd();

   // Consulta 1
   $sql = "SELECT * FROM flights WHERE estado = 'Programado';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 1</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 2
   $sql = "SELECT * FROM flights WHERE estado = 'Cancelado';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 2</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 3
   $sql = "SELECT DISTINCT aerolinea FROM flights WHERE estado = 'Programado';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 3</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 4
   $sql = "SELECT aerolinea, COUNT(*) AS total_vuelos_por_aerolinea FROM flights WHERE estado = 'Programado' GROUP BY aerolinea;";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 4</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 5
   $sql = "SELECT origen, COUNT(*) AS total_salidas FROM flights WHERE estado = 'Programado' GROUP BY origen;";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 5</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 6
   $sql = "SELECT destino, COUNT(*) AS total_llegadas FROM flights WHERE estado = 'Programado' GROUP BY destino;";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 6</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 7
   $sql = "SELECT * FROM flights WHERE origen = 'Nueva York' AND destino = 'Los Ángeles';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 7</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 8
   $sql = "SELECT * FROM personal WHERE puesto = 'Piloto';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 8</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 9
   $sql = "SELECT * FROM flights WHERE estado = 'Cancelado';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 9</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 10
   $sql = "SELECT * FROM baggage WHERE estado = 'Perdido';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 10</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 11
   $sql = "SELECT * FROM flights WHERE fecha_salida = '2024-03-18';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 11</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 12
   $sql = "SELECT * FROM flights WHERE hora_salida BETWEEN '10:00:00' AND '18:00:00';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 12</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 13
   $sql = "SELECT * FROM flights WHERE aerolinea = 'Aerobrasil';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 13</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 14
   $sql = "SELECT * FROM passengers WHERE fecha_nacimiento < '1990-01-01';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 14</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 15
   $sql = "SELECT * FROM flights WHERE destino = 'París';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 15</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 16
   $sql = "SELECT * FROM baggage WHERE estado = 'Entregado';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 16</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 17
   $sql = "SELECT * FROM flights WHERE aerolinea LIKE 'Cielos%';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 17</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 18
   $sql = "SELECT * FROM personal WHERE departamento = 'Tripulación de Cabina';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 18</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 19
   $sql = "SELECT * FROM passengers WHERE documento_identidad LIKE '%A%';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 19</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";

   // Consulta 20
   $sql = "SELECT * FROM flights WHERE estado = 'Retrasado';";
   $consulta = mysqli_query($conexion, $sql);
   echo "<h2>Consulta 20</h2>";
   echo "<table id='miTabla'>";
   $filas = mysqli_fetch_fields($consulta);
   echo "<tr>";
   foreach ($filas as $campo) {
      echo "<th>" . $campo->name . "</th>";
   }
   echo "</tr>";
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
   echo "</table><br>";
   ?>
</body>

</html>
<?php
include 'conexion_bd.php';
$conexion = conexion_bd();


$sql = "SELECT * FROM airportServices";
$consulta = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD de Servicios Aeroportuarios</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <h2>Crear Servicio Aeroportuario</h2>
    <form action="insertAirportServices.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Tipo: <input type="text" name="tipo" required><br>
        Ubicacion: <input type="text" name="ubicacion" required><br>
        <input type="submit" name="create" value="Crear Servicio Aeroportuario">

    </form>


    <h2>Lista de Servicios Aeroportuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Ubicacion</th>
        </tr>

        <?php
        if ($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_assoc()) {
                echo "<tr>
            <td>" . $row["id_servicio"] . "</td>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["tipo"] . "</td>
            <td>" . $row["ubicacion"] . "</td>
            <td class='actions'>
                <form action='updateAirportServices.php' method='post'>
                    <input type='hidden' name='id_update' value='" . $row["id_servicio"] . "'>
                    <input type='text' name='nombre' value='" . htmlspecialchars($row["nombre"]) . "' placeholder='Nombre' required>
                    <input type='text' name='tipo' value='" . htmlspecialchars($row["tipo"]) . "' placeholder='Tipo' required>
                    <input type='text' name='ubicacion' value='" . htmlspecialchars($row["ubicacion"]) . "' placeholder='ubicacion'>
                    <button type='submit' name='update' value='Actualizar'>Actualizar</button>
                </form>
                <form action='deletAirportServices.php' method='post'>
                    <input type='hidden' name='id_delete' value='" . $row["id_servicio"] . "'>
                    <button type='submit' name='delete' value='Eliminar'>Eliminar</button>
                </form>
            </td>
        </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay Servicios Aeroportuarios</td></tr>";
        }
        ?>
    </table>
</body>

</html>
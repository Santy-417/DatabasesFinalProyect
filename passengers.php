<?php
include 'conexion_bd.php';
$conexion = conexion_bd();


$sql = "SELECT * FROM passengers";
$consulta = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD de Pasajeros</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <h2>Crear Pasajeros</h2>
    <form action="insertPassengers.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Fecha de nacimiento: <input type="date" name="fecha_nacimiento" required><br>
        Documento de identidad: <input type="text" name="documento_identidad" required><br>
        <input type="submit" name="create" value="Crear Pasajero">

    </form>


    <h2>Lista de Pasajeros</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Documento de identidad</th>
        </tr>

        <?php
        if ($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_assoc()) {
                echo "<tr>
            <td>" . $row["id_pasajero"] . "</td>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["apellido"] . "</td>
            <td>" . $row["fecha_nacimiento"] . "</td>
            <td>" . $row["documento_identidad"] . "</td>
            <td class='actions'>
                <form action='updatePassengers.php' method='post'>
                    <input type='hidden' name='id_update' value='" . $row["id_pasajero"] . "'>
                    <input type='text' name='nombre' value='" . htmlspecialchars($row["nombre"]) . "' placeholder='Nombre' required>
                    <input type='text' name='apellido' value='" . htmlspecialchars($row["apellido"]) . "' placeholder='Apellido' required>
                    <input type='text' name='fecha_nacimiento' value='" . htmlspecialchars($row["fecha_nacimiento"]) . "' placeholder='Fecha de nacimiento'>
                    <input type='text' name='documento_identidad' value='" . htmlspecialchars($row["documento_identidad"]) . "' placeholder='Documento de identidad'>
                    <button type='submit' name='update' value='Actualizar'>Actualizar</button>
                </form>
                <form action='deletPassengers.php' method='post'>
                    <input type='hidden' name='id_delete' value='" . $row["id_pasajero"] . "'>
                    <button type='submit' name='delete' value='Eliminar'>Eliminar</button>
                </form>
            </td>
        </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay Pasajeros</td></tr>";
        }
        ?>
    </table>
</body>

</html>
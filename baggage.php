<?php
include 'conexion_bd.php';
$conexion = conexion_bd();


$sql = "SELECT * FROM baggage";
$consulta = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD de Equipaje</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <h2>Crear Equipaje</h2>
    <form action="insertBaggage.php" method="post">
        Id pasajero: <input type="text" name="id_pasajero" required><br>
        Numero vuelo: <input type="text" name="numero_vuelo" required><br>
        Estado: <input type="text" name="estado" required><br>
        <input type="submit" name="create" value="Crear Equipaje">

    </form>


    <h2>Lista de Equipaje</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Id pasajero</th>
            <th>Numero de vuelo</th>
            <th>Estado</th>
        </tr>

        <?php
        if ($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_assoc()) {
                echo "<tr>
            <td>" . $row["id_equipaje"] . "</td>
            <td>" . $row["id_pasajero"] . "</td>
            <td>" . $row["numero_vuelo"] . "</td>
            <td>" . $row["estado"] . "</td>
            <td class='actions'>
                <form action='updateBaggage.php' method='post'>
                    <input type='hidden' name='id_update' value='" . $row["id_equipaje"] . "'>
                    <input type='text' name='id_pasajero' value='" . htmlspecialchars($row["id_pasajero"]) . "' placeholder='Id pasajero' required>
                    <input type='text' name='numero_vuelo' value='" . htmlspecialchars($row["numero_vuelo"]) . "' placeholder='Numero de vuelo' required>
                    <input type='text' name='estado' value='" . htmlspecialchars($row["estado"]) . "' placeholder='Estado'>
                    <button type='submit' name='update' value='Actualizar'>Actualizar</button>
                </form>
                <form action='deletBaggage.php' method='post'>
                    <input type='hidden' name='id_delete' value='" . $row["id_equipaje"] . "'>
                    <button type='submit' name='delete' value='Eliminar'>Eliminar</button>
                </form>
            </td>
        </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay Equipaje</td></tr>";
        }
        ?>
    </table>
</body>

</html>
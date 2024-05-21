<?php
include 'conexion_bd.php';
$conexion = conexion_bd();


$sql = "SELECT * FROM vuelos";
$consulta = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD de Vuelos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <h2>Crear Vuelos</h2>
    <form action="insertFlights.php" method="post">
        Numero de vuelo: <input type="text" name="numero_vuelo" required><br>
        Aerolinea: <input type="text" name="aerolinea" required><br>
        Origen: <input type="text" name="origen" required><br>
        Destino: <input type="text" name="destino" required><br>
        Fecha de salida: <input type="date" name="fecha_salida" required><br>
        Hora de salida: <input type="time" name="hora_salida" required><br>
        Estado: <input type="text" name="estado" required><br>
        Puerta de embarque: <input type="text" name="puerta_embarque" required><br>
        <input type="submit" name="create" value="Crear Vuelo">
    </form>


    <h2>Lista de Vuelos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Numero de Vuelo</th>
            <th>Aerolinea</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha de Salida</th>
            <th>Hora de Salida</th>
            <th>Estado</th>
            <th>Puerta de Embarque</th>
        </tr>

        <?php
        if ($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["id_vuelo"] . "</td>
                <td>" . $row["numero_vuelo"] . "</td>
                <td>" . $row["aerolinea"] . "</td>
                <td>" . $row["origen"] . "</td>
                <td>" . $row["destino"] . "</td>
                <td>" . $row["fecha_salida"] . "</td>
                <td>" . $row["hora_salida"] . "</td>
                <td>" . $row["estado"] . "</td>
                <td>" . $row["puerta_embarque"] . "</td>
            <td class='actions'>
                <form action='updateFlights.php' method='post'>
                    <input type='hidden' name='id_update' value='" . $row["id_vuelo"] . "'>
                    <input type='text' name='numero_vuelo' value='" . htmlspecialchars($row["numero_vuelo"]) . "' placeholder=Numero de Vuelo' required>
                    <input type='text' name='aerolinea' value='" . htmlspecialchars($row["aerolinea"]) . "' placeholder='Aerolinea' required>
                    <input type='text' name='origen' value='" . htmlspecialchars($row["origen"]) . "' placeholder='Origen'>
                    <input type='text' name='destino' value='" . htmlspecialchars($row["destino"]) . "' placeholder='Destino'>
                    <input type='text' name='fecha_salida' value='" . htmlspecialchars($row["fecha_salida"]) . "' placeholder='Fecha de Salida'>
                    <input type='text' name='hora_salida' value='" . htmlspecialchars($row["hora_salida"]) . "' placeholder='Hora de Salida'>
                    <input type='text' name='estado' value='" . htmlspecialchars($row["estado"]) . "' placeholder='Estado'>
                    <input type='text' name='puerta_embarque' value='" . htmlspecialchars($row["puerta_embarque"]) . "' placeholder='Puerta de Embarque'>
                    <button type='submit' name='update' value='Actualizar'>Actualizar</button>
                </form>
                <form action='deletFlights.php' method='post'>
                    <input type='hidden' name='id_delete' value='" . $row["id_vuelo"] . "'>
                    <button type='submit' name='delete' value='Eliminar'>Eliminar</button>
                </form>
            </td>
        </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay Vuelos</td></tr>";
        }
        ?>
    </table>
</body>

</html>
<?php
include 'conexion_bd.php';
$conexion = conexion_bd();


$sql = "SELECT * FROM personal";
$consulta = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD de Personal</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <h2>Crear Personal</h2>
    <form action="insertPersonal.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Puesto: <input type="text" name="puesto" required><br>
        Departamento: <input type="text" name="departamento" required><br>
        <input type="submit" name="create" value="Crear Personal">
    </form>

    <h2>Lista de Personal</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Puesto</th>
            <th>Departamento</th>
        </tr>

        <?php
        if ($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_assoc()) {
                echo "<tr>
            <td>" . $row["id_personal"] . "</td>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["apellido"] . "</td>
            <td>" . $row["puesto"] . "</td>
            <td>" . $row["departamento"] . "</td>
            <td class='actions'>
                <form action='updatePersonal.php' method='post'>
                    <input type='hidden' name='id_update' value='" . $row["id_personal"] . "'>
                    <input type='text' name='nombre' value='" . htmlspecialchars($row["nombre"]) . "' placeholder='Nombre' required>
                    <input type='text' name='apellido' value='" . htmlspecialchars($row["apellido"]) . "' placeholder='Apellido' required>
                    <input type='text' name='puesto' value='" . htmlspecialchars($row["puesto"]) . "' placeholder='Puesto'>
                    <input type='text' name='departamento' value='" . htmlspecialchars($row["departamento"]) . "' placeholder='Departamento'>
                    <button type='submit' name='update' value='Actualizar'>Actualizar</button>
                </form>
                <form action='deletPersonal.php' method='post'>
                    <input type='hidden' name='id_delete' value='" . $row["id_personal"] . "'>
                    <button type='submit' name='delete' value='Eliminar'>Eliminar</button>
                </form>
            </td>
        </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay Personal</td></tr>";
        }
        ?>
    </table>
</body>

</html>
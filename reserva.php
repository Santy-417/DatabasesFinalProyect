<?php
include('conexion_bd.php');
//ESTA SENTENCIA ESTABLECE UNA CONEXIÓN CON LA BASE DE DATOS
$conexion = conexion_bd();
$sql = "SELECT Reservas.ReservaID as ReservaID, CONCAT(Clientes.Nombre,' ',Clientes.Apellido) AS ClienteID, Vuelos.NúmeroVuelo as VueloID, Reservas.FechaReserva as FechaReserva, Reservas.Estado as Estado 
  FROM Clientes,Reservas,Vuelos 
  WHERE Clientes.ClienteiD=Reservas.ClienteID AND Reservas.VueloID=Vuelos.VueloID ORDER BY ClienteID ASC";

$consulta = mysqli_query($conexion, $sql);

//INICIO SEGMENTO DE CODIGO PARA TRAER LOS DATOS DEL CLIENTE
$sql_cliente = "SELECT CONCAT(Nombre, ' ', Apellido) AS cliente, ClienteID FROM Clientes";
$consulta_cliente = mysqli_query($conexion, $sql_cliente);
$registro_consulta_cliente = mysqli_fetch_array($consulta_cliente);
$strig_html_cliente = "<option value='0'>Seleccione una opción</option>";
while ($registro_consulta_cliente = mysqli_fetch_array($consulta_cliente)) {
    $strig_html_cliente .= "<option value='" . $registro_consulta_cliente['ClienteID'] . "'>" . $registro_consulta_cliente['cliente'] . "(" . $registro_consulta_cliente['ClienteID'] . ")" . "</option>";
}
//FIN SEGMENTO DE CODIGIO PARA TRAER LOS DATOS DEL CLIENTE

//INICIO SEGMENTO DE CODIGO PARA TRAER LOS DATOS DEL VUELO
$sql_vuelo = "SELECT `NúmeroVuelo` AS vuelo, `VueloID`  FROM `vuelos`";
$consulta_vuelo = mysqli_query($conexion, $sql_vuelo);
$registro_consulta_vuelo = mysqli_fetch_array($consulta_vuelo);
$strig_html_vuelo = "<option value='0'>Seleccione una opción</option>";
while ($registro_consulta_vuelo = mysqli_fetch_array($consulta_vuelo)) {
    $strig_html_vuelo .= "<option value='" . $registro_consulta_vuelo['VueloID'] . "'>" . $registro_consulta_vuelo['vuelo'] . "(" . $registro_consulta_vuelo['VueloID'] . ")" . "</option>";
}
//FIN SEGMENTO DE CÓDIGO PARA TRAER LOS DATOS DEL VUELO


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Reservar</title>
</head>

<body>

    <H2>FORMULARIO DE REGISTRO DE RESERVAS</H2>
    <form action="insertar_reserva.php" method="post">

        <table border="1">
            <tr>
                <td>
                    <label for="nombre">Cliente:</label>
                </td>
                <td>
                    <select id="cliente" name="cliente">
                        <?= $strig_html_cliente ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="vuelo">Vuelo:</label></td>
                <td>
                    <select id="vuelo" name="vuelo">
                        <?= $strig_html_vuelo ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> <label for="fecha">Seleccione una fecha:</label>
                </td>
                <td><input type="date" id="fecha" name="fecha"></td>
            </tr>
            <tr>
                <td><label for="Estado">Estado:</label></td>
                <td><input type="text" id="estado" name="estado" required></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Crear Reserva"></td>
            </tr>
            </tables>
            <table border="1">
                <?php while ($registro = mysqli_fetch_array($consulta)) : ?>
                    <tr>
                        <td><?= $registro['ReservaID'] ?></td>
                        <td><?= $registro['ClienteID'] ?></td>
                        <td><?= $registro['VueloID'] ?></td>
                        <td><?= $registro['FechaReserva'] ?></td>
                        <td><?= $registro['Estado'] ?></td>
                        <td><a href="Eliminar.php?ClienteID=<?= $registro['ClienteID'] ?>">Eliminar</a></td>
                        <td><a href="Actualizar.php">Actualizar</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
    </form>
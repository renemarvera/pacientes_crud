<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
</head>
<body>
    <h1>Pacientes</h1>
    <a href="agregar.php">Agregar Paciente</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM pacientes");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['apellido']}</td>
                <td>{$row['fecha_nacimiento']}</td>
                <td>{$row['telefono']}</td>
                <td>{$row['direccion']}</td>
                <td>
                    <a href='editar.php?id={$row['id']}'>Editar</a>
                    <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>

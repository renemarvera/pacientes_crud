<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Paciente</title>
</head>
<body>
    <h1>Agregar Paciente</h1>
    <form method="POST" action="">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="date" name="fecha_nacimiento" required>
        <input type="text" name="telefono" placeholder="Teléfono">
        <textarea name="direccion" placeholder="Dirección"></textarea>
        <button type="submit">Guardar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $conn->query("INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, telefono, direccion) 
                      VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$telefono', '$direccion')");
        header("Location: index.php");
    }
    ?>
</body>
</html>

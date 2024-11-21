<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
</head>
<body>
    <h1>Editar Paciente</h1>
    <?php
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM pacientes WHERE id = $id");
    $row = $result->fetch_assoc();
    ?>
    <form method="POST" action="">
        <input type="text" name="nombre" value="<?= $row['nombre'] ?>" required>
        <input type="text" name="apellido" value="<?= $row['apellido'] ?>" required>
        <input type="date" name="fecha_nacimiento" value="<?= $row['fecha_nacimiento'] ?>" required>
        <input type="text" name="telefono" value="<?= $row['telefono'] ?>">
        <textarea name="direccion"><?= $row['direccion'] ?></textarea>
        <button type="submit">Actualizar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $conn->query("UPDATE pacientes SET 
                      nombre='$nombre', apellido='$apellido', fecha_nacimiento='$fecha_nacimiento', 
                      telefono='$telefono', direccion='$direccion' WHERE id=$id");
        header("Location: index.php");
    }
    ?>
</body>
</html>

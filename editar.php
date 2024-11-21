<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-warning mb-4">Editar Paciente</h1>
        <div class="card shadow">
            <div class="card-body">
                <?php
                $id = $_GET['id'];
                $result = $conn->query("SELECT * FROM pacientes WHERE id = $id");
                $row = $result->fetch_assoc();
                ?>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $row['nombre'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" value="<?= $row['apellido'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?= $row['fecha_nacimiento'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="<?= $row['telefono'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <textarea name="direccion" id="direccion" class="form-control" rows="3"><?= $row['direccion'] ?></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </div>
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
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

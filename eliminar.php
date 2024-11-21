<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Paciente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-danger mb-4">Eliminar Paciente</h1>
        <div class="card shadow">
            <div class="card-body text-center">
                <p class="mb-4">¿Estás seguro de que deseas eliminar este paciente?</p>
                <div class="d-flex justify-content-center">
                    <a href="index.php" class="btn btn-secondary me-2">Cancelar</a>
                    <a href="eliminar_confirmado.php?id=<?= $_GET['id'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="container mt-5">
    <h2>Agregar Nuevo Vehículo</h2>
    <form action="store.php" method="POST" class="w-50">
        <div class="mb-3">
            <label>Marca:</label>
            <input type="text" name="marca" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Modelo:</label>
            <input type="text" name="modelo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Año:</label>
            <input type="number" name="anio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Precio:</label>
            <input type="number" name="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
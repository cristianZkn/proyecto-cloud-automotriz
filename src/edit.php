<?php
require 'db.php';
if (!isset($_GET['id'])) { header("Location: index.php"); exit(); }

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM vehiculos WHERE id = ?");
$stmt->execute([$id]);
$vehiculo = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$vehiculo) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="container mt-5">
    <h2>Editar Vehículo</h2>
    <form action="update.php" method="POST" class="w-50">
        <input type="hidden" name="id" value="<?= $vehiculo['id'] ?>">
        <div class="mb-3">
            <label>Marca:</label>
            <input type="text" name="marca" value="<?= htmlspecialchars($vehiculo['marca']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Modelo:</label>
            <input type="text" name="modelo" value="<?= htmlspecialchars($vehiculo['modelo']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Año:</label>
            <input type="number" name="anio" value="<?= $vehiculo['anio'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Precio:</label>
            <input type="number" name="precio" value="<?= $vehiculo['precio'] ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
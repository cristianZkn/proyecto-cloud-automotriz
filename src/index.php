<?php
require 'db.php';
$stmt = $pdo->query("SELECT * FROM vehiculos ORDER BY id ASC");
$vehiculos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Automotora Cloud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="container mt-5">
    <h2>Inventario de Vehículos</h2>
    <a href="create.php" class="btn btn-primary mb-3">Agregar Vehículo</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Marca</th><th>Modelo</th><th>Año</th><th>Precio</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehiculos as $v): ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= htmlspecialchars($v['marca']) ?></td>
                <td><?= htmlspecialchars($v['modelo']) ?></td>
                <td><?= $v['anio'] ?></td>
                <td class="price-col">$<?= number_format($v['precio'], 0, ',', '.') ?></td>
                <td>
                    <a href="edit.php?id=<?= $v['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="delete.php?id=<?= $v['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este vehículo?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
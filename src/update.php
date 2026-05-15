<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $precio = $_POST['precio'];

    $stmt = $pdo->prepare("UPDATE vehiculos SET marca=?, modelo=?, anio=?, precio=? WHERE id=?");
    $stmt->execute([$marca, $modelo, $anio, $precio, $id]);

    header("Location: index.php");
    exit();
}
?>
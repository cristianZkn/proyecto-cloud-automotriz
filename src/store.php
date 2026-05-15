<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $precio = $_POST['precio'];

    $stmt = $pdo->prepare("INSERT INTO vehiculos (marca, modelo, anio, precio) VALUES (?, ?, ?, ?)");
    $stmt->execute([$marca, $modelo, $anio, $precio]);

    header("Location: index.php");
    exit();
}
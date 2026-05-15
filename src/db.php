<?php
// Lee las variables de entorno de Docker, o usa valores por defecto si estás en local
$host = getenv('DB_HOST') ?: 'localhost'; 
$db = getenv('DB_NAME') ?: 'automotora';
$user = getenv('DB_USER') ?: 'admin';
$pass = getenv('DB_PASS') ?: 'admin123';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
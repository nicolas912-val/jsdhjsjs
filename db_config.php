<?php
$servername = "localhost";
$username = "root"; // el usuario por defecto de MySQL en XAMPP
$password = ""; // la contraseña por defecto de MySQL en XAMPP es una cadena vacía
$dbname = "perros_db"; // nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

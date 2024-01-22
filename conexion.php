<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Msofia12";
$dbname = "GestorEstudiantesDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>

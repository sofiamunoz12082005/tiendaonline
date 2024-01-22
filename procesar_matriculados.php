<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $edad = intval($_POST["edad"]);
    $genero = htmlspecialchars($_POST["genero"]);

    if (empty($nombre) || empty($edad) || empty($genero)) {
        echo "Por favor, complete todos los campos del formulario.";
        exit();
    }

    // Establecer conexión con la base de datos 
    $servername = "127.0.0.1";
    $username = "root";
    $password = "Msofia12";
    $dbname = "GestorEstudiantesDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = $conn->prepare("INSERT INTO Estudiantes (NombreEstudiante, Edad, Genero) VALUES (?, ?, ?)");

    $sql->bind_param("sis", $nombre, $edad, $genero);

    if ($sql->execute()) {

        header("Location: exito.php?mensaje=Matrícula enviada correctamente");
        exit();
    } else {
        echo "Error al insertar registro: " . $sql->error;
    }
    
    // Cerrar la conexión con la base de datos
    $sql->close();
    $conn->close();
}
?>

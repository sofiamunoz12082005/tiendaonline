<?php
include('conexion.php');

function obtenerRegistros() {
    global $conn;
    $sql = "SELECT * FROM Estudiantes";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Create
function agregarRegistro($Nombre, $Edad, $Genero, $CursoID) {
    global $conn;
    $sql = "INSERT INTO Estudiantes (NombreEstudiante, Edad, Genero, CursoID) VALUES ('$Nombre', $Edad, '$Genero', $CursoID)";
    return $conn->query($sql);
}

// Update
function actualizarRegistro($id, $Nombre, $Edad, $Genero, $CursoID) {
    global $conn;
    $sql = "UPDATE Estudiantes SET NombreEstudiante='$Nombre', Edad=$Edad, Genero='$Genero', CursoID=$CursoID WHERE EstudianteID=$id";
    return $conn->query($sql);
}

// Delete
function eliminarRegistro($id) {
    global $conn;
    $sql = "DELETE FROM Estudiantes WHERE EstudianteID=$id";
    return $conn->query($sql);
}
?>


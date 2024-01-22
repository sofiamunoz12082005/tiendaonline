<?php
include("crud.php");
$id = $_GET["id"] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"]; 
    $Nombre = $_POST["Nombre"];
    $Edad = $_POST["Edad"];
    $Genero = $_POST["Genero"];
    actualizarRegistro($id, $Nombre, $Edad, $Genero);
    header("Location: index.php");
    exit();
}

// lectura 
$registros = obtenerRegistros();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP y MySQL</title>
    <style>
        /* ... (tu estilo CSS) */
    </style>
</head>
<body>

    <h2>Registros</h2>
    <ul>
        <?php foreach ($registros as $registro) : ?>
            <li>
                <?php echo htmlspecialchars($registro['Nombre']) . ' - ' . htmlspecialchars($registro['Edad']) . ' - ' . htmlspecialchars($registro['Genero']); ?>
                <a href="update.php?id=<?php echo $registro['id']; ?>">Actualizar</a>
                <a href="delete.php?id=<?php echo $registro['id']; ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Actualizar Registro</h2>
    <form action="update.php" method="post">
        <!-- Campo oculto para el ID -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" required>
        <label for="Edad">Edad:</label>
        <input type="text" name="Edad" required>
        <label for="Genero">Género:</label>
        <input type="text" name="Genero" required>
        <button type="submit">Actualizar</button>
    </form>

</body>
</html>
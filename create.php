<?php
include("crud.php");

// lectura 
$registros = obtenerRegistros();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP y MySQL</title>
    <link rel="stylesheet" type="text/css" href="../unit4/styles.css">
</head>
<body>

    <h2>Registros</h2>
    <ul>
        <?php foreach ($registros as $registro) : ?>
            <li>
                <?php echo $registro['Nombre'] . ' - ' . $registro['Edad'] . ' - ' . $registro['Genero']; ?>
                <a href="../unit4/edit.php?id=<?php echo $registro['id']; ?>">Editar</a>
                <a href="../unit4/delete.php?id=<?php echo $registro['id']; ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Agregar Registro</h2>
    <form action="create.php" method="post">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" required>
        <label for="Edad">Edad:</label>
        <input type="text" name="Edad" required>
        <label for="Genero">Género:</label>
        <input type="text" name="Genero" required>
        <button type="submit">Agregar</button>
    </form>

</body>
</html>

<?php
include('crud.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
                <?php
                    echo isset($registro['Nombre']) ? htmlspecialchars($registro['Nombre']) : 'Nombre no definido';
                    echo ' - ';
                    echo isset($registro['Edad']) ? htmlspecialchars($registro['Edad']) : 'Edad no definida';
                    echo ' - ';
                    echo isset($registro['Genero']) ? htmlspecialchars($registro['Genero']) : 'Género no definido';
                ?>
                <a href="update.php?id=<?php echo $registro['EstudianteID']; ?>">Actualizar</a>
                <a href="delete.php?id=<?php echo $registro['EstudianteID']; ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Agregar Registro</h2>
    
    <form action="agregar.php" method="post">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" required>
        <label for="Edad">Edad:</label>
        <input type="text" name="Edad" required>
        <label for="Genero">Género:</label>
        <input type="text" name="Genero" required>
        <button type="submit">Agregar</button>
    </form>

    <table>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            table td {
                border: 1px solid orange;
                text-align: center;
                padding: 1.3rem;
            }
            .button {
                border-radius: .5rem;
                color: white;
                background-color: orange;
                padding: 1rem;
                text-decoration: none;
            }
        </style>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro) : ?>
                <tr>
                <td><?php echo isset($registro['NombreEstudiante']) ? htmlspecialchars($registro['NombreEstudiante']) : 'Nombre no definido'; ?></td>
            <td><?php echo isset($registro['Edad']) ? htmlspecialchars($registro['Edad']) : 'Edad no definida'; ?></td>
            <td><?php echo isset($registro['Genero']) ? htmlspecialchars($registro['Genero']) : 'Género no definido'; ?></td>
            <td>
            <a href="./update.php?id=<?php echo $registro['EstudianteID']; ?>">Editar</a>
            <a href="./delete.php?id=<?php echo $registro['EstudianteID']; ?>">Eliminar</a>
            </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
</html>

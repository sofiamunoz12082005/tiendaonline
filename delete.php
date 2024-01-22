<?php
include("crud.php");
$id = $_GET["id"] ?? '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    eliminarRegistro($id);
    header("Location: a.php");
    exit();
}

$registros = obtenerRegistros();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP y MySQL</title>
    <style>
          
          body {
              font-family: Arial, sans-serif;
              background-color: #f4f4f4;
              margin: 0;
              padding: 0;
          }
  
          h2 {
              color: #333;
          }
  
          ul {
              list-style: none;
              padding: 0;
          }
  
          li {
              background-color: #fff;
              margin-bottom: 10px;
              padding: 10px;
              border-radius: 5px;
              box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
          }
  
          a {
              margin-left: 10px;
              text-decoration: none;
              color: #3498db;
          }
  
          a:hover {
              text-decoration: underline;
          }
  
          form {
              max-width: 400px;
              margin: 20px auto;
              padding: 20px;
              background-color: #fff;
              border-radius: 5px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
  
          label {
              display: block;
              margin-bottom: 8px;
          }
  
          input {
              width: 100%;
              padding: 8px;
              margin-bottom: 16px;
              box-sizing: border-box;
          }
  
          button {
              background-color: #3498db;
              color: #fff;
              padding: 10px 15px;
              border: none;
              border-radius: 5px;
              cursor: pointer;
          }
  
          button:hover {
              background-color: #2980b9;
          }
      </style>

</head>
<body>

   
    <h2>Registros</h2>
    <ul>
        <?php foreach ($registros as $registro) : ?>
            <li>
                <?php echo $registro['Nombre'] . ' - ' . $registro['Edad'] . ' - ' . $registro['Genero']; ?>
                <a href="update.php?id=<?php echo $registro['id']; ?>">Update</a>
                <a href="delete.php?id=<?php echo $registro['id']; ?>">Delete</a>       

            </li>
        <?php endforeach; ?>
    </ul>
    <h2>Eliminar Registro</h2>
    <form action="delete.php?id=<?php echo $id; ?>" method="post">
        <button type="submit">Confirmar Eliminación</button>
    </form>

</body>
</html>

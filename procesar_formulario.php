<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Recibida</title>
    <link rel="stylesheet" href="../principal/style.css">
</head>
<body>
    <main>
        <section id="informacion-recibida">
            <h1>Información Recibida</h1>
            <p>Gracias por contactarnos. Hemos recibido la siguiente información:</p>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST["nombre"]) . "</p>";
                echo "<p><strong>Correo electrónico:</strong> " . htmlspecialchars($_POST["correo"]) . "</p>";
                echo "<p><strong>Número de teléfono:</strong> " . htmlspecialchars($_POST["telefono"]) . "</p>";
                echo "<p><strong>Preguntas o comentarios:</strong> " . htmlspecialchars($_POST["preguntas"]) . "</p>";
            }
            ?>

            <p>Volver a <a href="../principal/index.html">Inicio</a></p>
        </section>
    </main>

    <footer>
        <p>© 2023 Universidad Tecnológica de Madrid. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

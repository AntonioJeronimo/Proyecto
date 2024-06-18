<?php
$servername = "localhost";
$username = "id22199857_funnyss";
$password = "123456789Cesar/";
$dbname = "id22199857_proyecto_3funnys";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesamiento del formulario para añadir una obra de arte
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    // Procesar subida de imagen
    $imagen = $_FILES['imagen']['name'];
    $imagen_temp = $_FILES['imagen']['tmp_name'];
    $imagen_path = 'uploads/' . $imagen;

    // Mover imagen a la carpeta de subidas
    move_uploaded_file($imagen_temp, $imagen_path);

    // Ejecutar la inserción en la base de datos
    $sql = "INSERT INTO galeria (titulo, descripcion, imagen) VALUES ('$titulo', '$descripcion', '$imagen')";
    if ($conn->query($sql) === TRUE) {
        echo "Obra de arte añadida correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Arte - Libros y Galería de Arte</title>
    <style>
        body {
            background-image: url('fondofunn.jpg'); /* Ruta a tu imagen de fondo */
            background-size: cover;
            background-position: center;
            color: white; /* Color de texto blanco */
            font-family: Arial, sans-serif; /* Fuente del texto */
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .sidebar {
            width: 250px;
            background-color: orange; /* Color de fondo naranja */
            padding: 20px;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        /* Estilos para los enlaces */
        a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
        /* Estilos para el encabezado */
        header {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente para el encabezado */
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        /* Estilos para el formulario */
        form {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente para el formulario */
            padding: 20px;
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            background-color: #fff; /* Fondo del input blanco */
            color: #333; /* Color del texto en inputs */
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: orange; /* Botón naranja */
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ff9900; /* Color de hover del botón naranja */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <header>
                <h2>Menú</h2>
            </header>
            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="libros.php">Libros</a></li>
                    <li><a href="galeria.php">Galería de Arte</a></li>
                    <li><a href="acerca_de.php">Acerca de</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <header>
                <h1>Galería de Arte</h1>
            </header>
            <section>
                <h2>Añadir Nueva Obra de Arte</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <label for="titulo">Título:</label><br>
                    <input type="text" id="titulo" name="titulo" required><br><br>
                    <label for="descripcion">Descripción:</label><br>
                    <textarea id="descripcion" name="descripcion" rows="4" required></textarea><br><br>
                    <label for="imagen">Subir Imagen:</label><br>
                    <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>
                    <input type="submit" name="submit" value="Guardar">
                </form>
            </section>
        </div>
    </div>
</body>
</html>

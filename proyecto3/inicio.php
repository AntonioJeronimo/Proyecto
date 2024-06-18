<?php
// Conexión a la base de datos (ejemplo)
$servername = "localhost";
$username = "id22199857_funnyss";
$password = "123456789Cesar/";
$dbname = "id22199857_proyecto_3funnys";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener datos de libros y galería
$sql_libros = "SELECT * FROM libros";
$result_libros = $conn->query($sql_libros);

$sql_galeria = "SELECT * FROM galeria";
$result_galeria = $conn->query($sql_galeria);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros y Galería de Arte</title>
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
        /* Estilos para las publicaciones */
        .publication {
            background-color: #333; /* Fondo gris oscuro */
            border: 2px solid orange; /* Borde naranja */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px; /* Bordes redondeados */
        }
        .publication img {
            max-width: 100%;
            border-radius: 10px; /* Bordes redondeados para las imágenes */
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
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="libros.php">Libros</a></li>
                    <li><a href="galeria.php">Galería de Arte</a></li>
                    <li><a href="acerca_de.php">Acerca de</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <header>
                <h1>Bienvenido a Libros y Galería de Arte</h1>
            </header>
            <section>
                <h2>Libros</h2>
                <?php
                if ($result_libros->num_rows > 0) {
                    while($row = $result_libros->fetch_assoc()) {
                        echo "<div class='publication'>";
                        echo "<h3>" . $row["titulo"] . "</h3>";
                        echo "<p>" . $row["descripcion"] . "</p>";
                        if ($row["imagen"]) {
                            echo "<img src='uploads/" . $row["imagen"] . "' alt='" . $row["titulo"] . "'>";
                        }
                        if ($row["archivo"]) {
                            echo "<p><a href='uploads/" . $row["archivo"] . "' download>Descargar libro</a></p>";
                        }
                        echo "</div>";
                    }
                } else {
                    echo "<p>No hay libros disponibles.</p>";
                }
                ?>

                <h2>Galería de Arte</h2>
                <?php
                if ($result_galeria->num_rows > 0) {
                    while($row = $result_galeria->fetch_assoc()) {
                        echo "<div class='publication'>";
                        echo "<h3>" . $row["titulo"] . "</h3>";
                        echo "<p>" . $row["descripcion"] . "</p>";
                        if ($row["imagen"]) {
                            echo "<img src='uploads/" . $row["imagen"] . "' alt='" . $row["titulo"] . "'>";
                        }
                        echo "</div>";
                    }
                } else {
                    echo "<p>No hay obras de arte disponibles.</p>";
                }
                ?>
            </section>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
        /* Estilos para los perfiles de contacto */
        .profile {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente para los perfiles */
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px solid orange; /* Bordes naranjas */
        }
        .profile img {
            max-width: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .social-links {
            margin-top: 10px;
        }
        .social-links a {
            color: orange;
            margin: 0 5px;
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
                <h1>Contacto</h1>
            </header>
            <section>
                <div class="profile">
                    <img src="funnys_porfile.jpg" alt="Persona 1">
                    <h3>Cesar Santiago Carrasco Puertos</h3>
                    <p>Especialidad: Programación</p>
                    <p>Colaboración: Editor y programador PHP.</p>
                    
                </div>
                <div class="profile">
                    <img src="wintersi.jpg" alt="Persona 2">
                    <h3>Antonio Jeronimo Ramirez</h3>
                    <p>Especialidad: Programación</p>
                    <p>Colaboración: Coordinador, idealista, programador SQL.</p>
                    
                </div>
                <div class="profile">
                    <img src="michelada.jpg" alt="Persona 3">
                    <h3>Michelle Benitez Xolalpa</h3>
                    <p>Especialidad: Programación</p>
                    <p>Colaboración: Diseñadora, encargada de la imagen visual del sitio, estilos CSS y idealista del proyecto.</p>
                    
                </div>
            </section>
        </div>
    </div>
</body>
</html>

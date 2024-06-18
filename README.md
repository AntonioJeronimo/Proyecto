# Proyecto
Proyecto tercera evaluacion
# Proyecto: Plataforma para Compartir Cuentos e Imágenes

# Descripción del Proyecto

Este proyecto ha sido desarrollado por:
- Antonio Jerónimo Ramírez
- César Santiago Carrasco Puertos
- Michelle Benítez Xolalpa

La plataforma consiste en una página web alojada en [000webhost](https://www.000webhost.com/) que permite a los usuarios subir y compartir cuentos o libros y también imágenes. Los usuarios pueden subir documentos que contengan sus cuentos o historias, y junto con cada documento, se solicita una imagen de portada, una descripción y un título. Además, la plataforma cuenta con una galería donde los usuarios pueden subir imágenes con un título.

# Características Principales

- *Subida de Cuentos o Libros*: Los usuarios pueden subir documentos con sus cuentos o historias. Se requiere proporcionar:
  - Título del cuento o libro
  - Descripción del contenido
  - Imagen de portada
  
- *Galería de Imágenes*: Los usuarios pueden subir imágenes y añadir un título a cada imagen.

# Tecnologías Utilizadas

- *Backend*: Php
- *Frontend*: HTML y CSS
- *Base de Datos*: MySQL y PhpMyAdmin
- *Alojamiento Web*: 000webhost

# Instalación y Configuración

1. Clona este repositorio en tu máquina local:

3. Configura la base de datos y actualiza los parámetros de conexión en el archivo de configuración correspondiente.
 usa el siguiente codigo
-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS id22199857_proyecto_3funnys;

-- Conectar a la base de datos
USE id22199857_proyecto_3funnys;

-- Crear la tabla galeria
CREATE TABLE galeria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Crear la tabla libros
CREATE TABLE libros (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    imagen VARCHAR(255),
    archivo VARCHAR(255),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

4. Sube los archivos al hosting de 000webhost(opcional).

# Uso

1. Abre el archivo index o usa el siguiente link directamente para dirgirte al proyecto el cual ya esta subido en webhost
https://funnys234website.000webhostapp.com/inicio.php
2. Sube tu cuento o libro proporcionando el título, descripción e imagen de portada.
3. Explora la galería de imágenes y sube tus propias imágenes con un título.


# Contacto

Para cualquier pregunta o sugerencia, puedes contactarnos a través de:
- Antonio Jerónimo Ramírez: https://www.facebook.com/antonio.jeronimoramirez?mibextid=ZbWKwL
- César Santiago Carrasco Puertos: https://www.facebook.com/cesarsantiago.santiagocarrascopuertos.9/
- Michelle Benítez Xolalpa: Échale un vistazo a Mich (@Bakudeku2006): https://x.com/Bakudeku2006?t=bkP6eWuuoLU-tsCuODgFuw&s=08

---

¡Esperamos que disfrutes usando nuestra plataforma para compartir cuentos e imágenes!

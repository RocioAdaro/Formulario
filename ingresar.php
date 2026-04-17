 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingresar</title>
    <link rel="stylesheet" href="diseño.css">
 </head>
 <body>
    
    <form action="ingresar.php" method="post">
        nombre: <input type="text" name="nombre" required><br><br>
        descripcion: <input type="text" name="descripcion" required><br><br>
        precio: <input type="number" name="precio" required><br><br>

    <input type="submit" value="enviar">
    </form>



<?php
 
 
 try {
        $conexion = new PDO('mysql:host=localhost;dbname=prueba','root', '');
        echo "conexion ok";
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }


    if($_POST){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio']; 
        $sql1="INSERT INTO usuarios (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
    $conexion->query($sql1);
    
    }
    


    ?>


 </body>
 </html>
 
 
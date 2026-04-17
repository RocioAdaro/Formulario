 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar</title>
    <link rel="stylesheet" href="diseño.css">
 </head>
 <body>
    

 <form action="mostrar.php" method="post">
    <input type="submit" value="mostrar">
    </form>




<?php

 try {
        $conexion = new PDO('mysql:host=localhost;dbname=prueba','root', '');
        echo "";
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

    try {
    foreach($conexion->query('SELECT * from usuarios') as $fila){
        echo 'Nombre:'.$fila['nombre'] .'<br> Descripcion: ' . $fila['descripcion'] . ' <br> Precio: ' . $fila['precio'] . '<br>';
        echo '<br>';

    }
    } catch (PDOException $e) {
        echo 'Error en la consulta: ' . $e->getMessage();
    }
?>

 </body>
 </html>
 
 
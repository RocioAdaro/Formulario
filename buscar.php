<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
    
    <form action="buscar.php" method="post">
        Buscar Por Nombre: <input type="text" name="buscar" ><br>

    <input type="submit" value="buscar">
    </form>


<?php
 
 try {
        $conexion = new PDO('mysql:host=localhost;dbname=prueba','root', '');
        echo "";
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }


if($_POST){
    $buscar = $_POST['buscar']; 
 $sql=$conexion->query("SELECT * FROM usuarios WHERE nombre LIKE '%$buscar%'");

foreach($sql as $fila){
   

    echo 'Nombre:'.$fila['nombre'] .'<br> Descripcion: ' . $fila['descripcion'] . ' <br> Precio: ' . $fila['precio'] . '<br>';
 
}}



     ?>

</body>
</html>


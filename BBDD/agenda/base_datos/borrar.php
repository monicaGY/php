<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body>
<?php  
require 'conexion.php';
try{
    $consulta = "DELETE from contactos WHERE id_contacto=".$_GET['id'].";";
    $consulta = $conn->prepare($consulta);
    $consulta->execute();
    
    echo 'Se ha borrado el contacto';
    echo '<a href="../index.php">Volver atrás</a>';
}catch(PDOException $e){
    die($e->getMessage());
}
?>
</body>
</html>

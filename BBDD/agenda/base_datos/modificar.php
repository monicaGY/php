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
require_once 'conexion.php';

try{

    if($_POST){

        try{
            $consulta = 'UPDATE contactos SET nombre="'.$_POST['nombre'].'", email="'.$_POST['email'].'", tlf="'.$_POST['tlf'].'", direccion="'.$_POST['direccion'].'" WHERE id_contacto='.$_GET['id'];
            $consulta = $conn->prepare($consulta);
            $consulta->execute();
            echo 'Se ha modificado correctamente el contacto';
            echo '<a href="../index.php">Volver atrás</a>';
            
        }catch(PDOException $e){
            echo  $sql . "<br>" . $e->getMessage();
        }
        

             
    }else{

        $consulta = "SELECT * FROM contactos WHERE id_contacto=".$_GET['id'];
        $consulta = $conn ->prepare($consulta);
        $consulta->execute();
        while($fila=$consulta->fetch()){
            echo '<h1>Modificando contacto</h1>';
            echo '<form action="modificar.php?id='.$fila['id_contacto'].'" method="POST">';
            echo 'Nombre: <input type="text" name="nombre" value="'.$fila['nombre'].'">';
            echo '<br /><br />';
            echo 'Email: <input type="email" name="email" value="'.$fila['email'].'">';
            echo '<br /><br />';
            echo 'Tlf: <input type="phone" name="tlf" value="'.$fila['tlf'].'">';
            echo '<br /><br />';
            echo 'Direccion: <input type="text" name="direccion" value="'.$fila['direccion'].'">';
            echo '<br /><br />';
            echo '<input type="submit" value="Modificar">';
            echo '</form>';

        }
    }
    
}catch(PDOException $e){
    die ($e->getMessage());
  }
?>
</body>
</html>

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
  
</body>
</html>
<?php  

  require_once 'conexion.php';
  if($_POST){
    try{
      $nombre=$_POST['nombre'];
      $email=$_POST['email'];
      $tlf=$_POST['tlf'];
      $direccion=$_POST['direccion'];
      $sql = "INSERT INTO contactos(nombre,email,tlf,direccion) VALUES('$nombre','$email','$tlf','$direccion') ";
      $consulta=$conn->prepare($sql);
      $consulta->execute();
  
      echo 'Se ha creado correctamente el contacto';
      echo '<a href="../index.php">Volver atrás</a>';
  
    }catch(PDOException $e){
      die($e->getMessage());
    }
  }else{
    include '../includes/formulario.php';
  }
?>
<?php


function conectarBDProducto(){
    $servername = "localhost";
    $username = "dwes";
    $dbname = "dwes";
    $password = "abc123.";
  
}


function eliminarProducto($codigo,$conexion){

  try{
    $sql ='DELETE FROM producto WHERE cod = :cod';
    $sql2 = 'DELETE FROM stock WHERE producto = :cod';
    $consulta = $conexion->prepare($sql);
    $consulta2 = $conexion->prepare($sql2);
    //traduccion
    $consulta2-> bindParam(':cod', $codigo);
    $consulta-> bindParam(':cod', $codigo);

    $consulta2->execute();
    $consulta->execute();

    echo '<p>Se ha borrado el producto.</p>';
    

  }catch(PDOException $e){
    
    die ($e->getMessage());
  }
  
}


function buscarProducto($codigo,$conexion){
  try{

    $sql = "SELECT * FROM `producto` where cod = '$codigo';";

    $consulta = $conexion->prepare($sql);
    $consulta->execute();

    if($consulta->rowCount()>0){
      return true;
    }

    return false;

  }catch(PDOException $e){
    die ($e->getMessage());

  }
}

function actualizarProducto($codigo,$nombre,$nom,$descripcion,$pvp,$familia,$conexion){
  
  try{
    $sql = ("UPDATE producto SET nombre=:nombre, nombre_corto=:nom, descripcion=:descripcion, pvp=:pvp, familia=:familia WHERE cod=:codigo");
    $consulta=$conexion->prepare($sql);
    $consulta->bindParam(':nombre',$nombre);
    $consulta->bindParam(':nom',$nom);
    $consulta->bindParam(':codigo',$codigo);
    $consulta->bindParam(':descripcion',$descripcion);
    $consulta->bindParam(':pvp',$pvp);
    $consulta->bindParam(':familia',$familia);

    $consulta->execute();

    if($consulta->rowCount()>0){
      echo '<p>Se ha actualizado el producto.</p>';
    }
    

  }catch(PDOException $e){
    echo $pvp;
    die($e->getMessage());
  }
}

function insertarProducto($codigo,$nombre,$nom,$descripcion,$pvp,$familia,$conexion){
  try{
    $sql = "INSERT INTO producto(cod,nombre,nombre_corto,descripcion,pvp,familia) VALUES('$codigo','$nombre','$nom','$descripcion',$pvp,'$familia') ";
    $consulta=$conexion->prepare($sql);
    $consulta->execute();

    if($consulta->rowCount()>0){
      echo '<p>Se ha insertado el producto.</p>';
    }

  }catch(PDOException $e){
    die($e->getMessage());
  }
}
?>


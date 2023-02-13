<?php
require_once 'funciones.php';
$conexion=conectarBDProducto();
if($_POST){
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $nom = $_POST['nom'];
    $descripcion = $_POST['descripcion'];
    $pvp = intval($_POST['pvp']);
    $familia = $_POST['familia'];

    if(!empty($codigo)){
        if(empty($nombre) && empty($nom) && empty($descripcion) && empty($pvp) && empty($familia)){
            eliminarProducto($codigo,$conexion);

        }elseif(!empty($nombre) && !empty($nom) && !empty($descripcion) && !empty($pvp) && !empty($familia)){

            $existe = buscarProducto($codigo,$conexion);

            if($existe){
                actualizarProducto($codigo,$nombre,$nom,$descripcion,$pvp,$familia,$conexion);
            }else{
                insertarProducto($codigo,$nombre,$nom,$descripcion,$pvp,$familia,$conexion);

            }
        }
    }else{
        include 'index.php';
    }
}
?>
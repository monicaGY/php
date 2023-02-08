<?php  include 'bd-tienda.php'; 
$tiendaBD = new TiendaBD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, tr, td{
            text-align:center;
            border: solid 2px black;
            padding:10px;
        }
        body{
            background-color:salmon;
        }
    </style>
</head>
<body>

    <h1>Información del producto</h1>
    <form action="index.php" method="post">
    <label>Introduce el codigo</label>

    <select name="codigo">
        <option selected disabled>-- Selecciona el codigo --</option>
        <?php
            $tiendaBD->optionSelectProducto();
        ?>
    </select>
    <input type="submit" value="Mostrar Stock">
    </form>

    <br><br>
    <?php  
        if($_POST){
            if(!empty($_POST['codigo'])){
                $tiendaBD->mostrarInformacionProducto($_POST['codigo']);
            }
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display:grid;
            place-content:left;
            grid-template-columns: repeat(2,auto);
            gap:10px;
            width:50%;
            
        }
        
        
    </style>    
</head>
<body>

    <h1>Ejercicio 1 - BBDD</h1>

    
    <form action="desarrollo.php" method='POST'>
        <label>Codigo</label>
        <input type="text" name="codigo">

        <label>Nombre</label>
        <input type="text" name="nombre">

        <label>Nombre corto</label>
        <input type="text" name="nom">

        <label>Descripcion</label>
        <input type="text" name="descripcion">

        <label>PVP</label>
        <input type="number" name="pvp">

        <label>Familia</label>
        <input type="text" name="familia" value='CAMARA'>

        <input type="submit" >
    </form>
    
</body>
</html>
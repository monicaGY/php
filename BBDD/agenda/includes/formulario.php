<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Creando nuevo contacto</h1>
    <form action="../base_datos/insertar.php" method="POST">
        Nombre: <input type="text" name="nombre">
        <br /><br />
        Email: <input type="email" name="email">
        <br /><br />
        Tlf: <input type="phone" name="tlf">
        <br /><br />
        Direccion: <input type="text" name="direccion">
        <br /><br />
        <input type="submit" value="Crear">
        
    </form>

</body>
</html>
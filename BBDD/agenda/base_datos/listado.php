<?php  
require_once 'conexion.php';

$consulta ='SELECT * FROM contactos';

$consulta = $conn -> query($consulta);
echo '<table border="1">';
echo '<tr><td>NOMBRE</td><td>EMAIL</td><td>TELÉFONO</td>
    <td>DIRECCIÓN</td><td>Editar</td><td>Borrar</tr>';
while($fila=$consulta->fetch()){
    echo '<tr> <td>'. $fila['nombre'] .'</td><td>'. $fila['email'].'</td><td>'.$fila['tlf']
        .'</td><td>'. $fila['direccion'].'</td><td><a href="./base_datos/modificar.php?id='.$fila[0].'">
        Editar</a></td><td><a href="./base_datos/borrar.php?id='.$fila[0].'">Borrar</a></tr>';
    
}
echo '</table>';


?>
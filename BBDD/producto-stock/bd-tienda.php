<?php  
class TiendaBD{
    private $conexion;
    private $host = 'localhost';
    private $dbname = 'dwes';
    private $username = 'dwes';
    private $password = 'abc123.';

    function __construct(){

        try{
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->username","$this->password");
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function mostrarInformacionProducto($codigo){
        try{
            $consulta = 'SELECT tienda.nombre, producto.nombre_corto, stock.unidades FROM `stock` 
            INNER JOIN tienda ON tienda.cod = stock.tienda 
            INNER JOIN producto ON stock.producto = producto.cod WHERE producto.cod="'.$codigo.'"';
            $consulta= $this->conexion->prepare($consulta);

            // $consulta->bindParam(':cod',$codigo);

            $consulta->execute();
            $contenido = [];
            echo '<table><tr>';
            echo '<td>TIENDA</td><td>PRODUCTO</td>
                <td>UNIDADES</td>';
            echo '</tr>';
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>'.$fila['nombre'].'</td><td>'.$fila['nombre_corto'].'</td>
                    <td>'.$fila['unidades'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

            // echo json_encode($contenido);
        }catch(PDOException $e){
            die($e->getMessage());
        }
        
    }

    function optionSelectProducto(){
        try{
            $consulta = 'SELECT * from producto';
            $consulta=$this->conexion->prepare($consulta);
            $consulta->execute();

            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $contenido[] = $fila;
                echo '<option>'.$fila['cod'].'</option>';
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

}

?>
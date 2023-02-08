<?php  
  $host = 'localhost';
  $dbname = 'agenda';
  $username = 'root';
  $password = '';
  try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
    return $conn;

  }catch(PDOException $e){
    die ('Error en la conecion de datos '. $e->getMessage());
  }


?>
<?php  ?>
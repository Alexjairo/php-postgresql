<?php
class Conectar{
    public function get_conexion() {
        $user="postgres";
        $pass="pokemongo99";
        $host="localhost";
        $db="pedido";
        $conectar= new PDO("pgsql:host=$host;dbname=$db",$user,$pass);
    return $conectar;
    }
}
// $pruebacon=new Conexion();
// $con = $pruebacon -> get_conexion();
// if($con){
//     echo "se conectó exitosamente";

// }else{
//     echo "Error";
// }
?>
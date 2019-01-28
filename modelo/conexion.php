<?php
class Conexion{
    public function get_conexion() {
        $user="postgres";
        $pass="pokemongo99";
        $host="localhostq";
        $db="pedido";
        $conexion= new PDO("pgsql:host=$host;dbname=$db",$user,$pass);
    return $conexion;
    }
}
$pruebacon=new Conexion();
$con = $pruebacon -> get_conexion();
if($con){
    echo "se conectó exitosamente";

}else{
    echo "Error";
}
?>
<?php
class DataBase{
 public function insertarProducto($nombre,$descripcion,$categoria,$precio){



     $modelo= new Conexion();
     $conexion=$modelo-> get_conexion();
     $sql= "insert into Producto(nombre, descripcion, categoria, precio) values(:nombre, :descripcion, :categoria, :precio)";
     $statement = $Conexion->prepare($sql);
     $statement -> bindParam(':nombre',$nombre);
     $statement-> bindParam(':descripcion',$descripcion);
     $statement-> bindParam(':categoria',$categoria);
     $statement-> bindParam(':precio',$precio);
     if(!$statement){
         return "Error no se puede realizar la carga";
     }else{
         $statement-> execute();
         return "la insercion se realizó con exito";
     }
 }

 
     public function  consultarProducto() {
         $array= null;
         $modelo= new Conexion();
         $conexion =$modelo -> get_conexion();
         $sql=" select * from producto";
         $statement = $Conexion->prepare(sql);
         $statement -> execute();
         while ($resultado=$statement->fetch()){
             $array[]=$resultado;
         }
       return $array;
     
     }
    }
 
?>
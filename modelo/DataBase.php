<?php
class DataBase{
 public function insertarProducto($nombre,$descripcion,$categoria,$precio){

     $modelo= new Conexion();
     $conexion=$modelo-> get_conexion();
     $sql= "insert into Producto(nombre, descripcion, categoria, precio) values(:nombre, :descripcion, :categoria, :precio)";
     $statement = $conexion->prepare($sql);
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
         $Conexion =$modelo -> get_conexion();
         $sql=" select * from producto order by id";
         $statement = $Conexion->prepare($sql);
         $statement -> execute();
         while ($resultado=$statement->fetch()){
             $array[]=$resultado;
         }
       return $array;
     
     }
     public function eliminarProducto($id){
         $modelo = new Conexion();
         $conexion = $modelo -> get_conexion();
         $sql="delete from producto where id=:id";
         $statement=$conexion-> prepare($sql);
         $statement-> bindParam(':id',$id);
         
         if (!$statement){
             return "el producto no existe";

         }else{
             
         $statement -> execute();
         return "el producto se ha eliminado correctamente";

         }
// JAIRO MOROCHO 23/01/2019
     }
     public function  buscarProducto($nombre) {
        $array= null;
        $modelo= new Conexion();
        $Conexion =$modelo -> get_conexion();
        $nombre="%".$nombre."%";
        $sql=" select * from producto where nombre like :nombre order by id";
        $statement = $Conexion->prepare($sql);
        $statement->bindParam('nombre',$nombre);
        $statement -> execute();
        while ($resultado=$statement->fetch()){
            $array[]=$resultado;
        }
      return $array;
    
    }
    public function recuperarProd($id){
        $array= null;
        $modelo=new Conexion();
        $conexion= $modelo->get_conexion();
        $sql ="select * from producto where id=:id";
        $statement=$conexion->prepare($sql);
        $statement-> bindParam(':id',$id);
        $statement->execute();
        while($resultado= $statement -> fetch()){
            $array[]=$resultado;
            }
            return $array
        }
    
    }
 
?>
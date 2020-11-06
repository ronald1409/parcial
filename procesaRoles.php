<?php

require_once ('conexion.php');
$id=$_POST['id'];
$descripcion=$_POST['descripcion'];



//var_dump($nombre.' '.$contraseña.' '.$correo);
if($id==0){
$sql="insert into roles(descripcion)value('$descripcion')";
$estado = $conn->query($sql);


}else{
 
   $sql="update roles set descripcion='$descripcion'  where id=$id";
$estado = $conn->query($sql); 
    
}
header('Location: roles.php');
?>

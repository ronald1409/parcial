<?php

require_once ('conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$contraseña=md5($_POST['contraseña']);
$correo= $_POST['correo'];


//var_dump($nombre.' '.$contraseña.' '.$correo);
if($id==0){
$sql="insert into usuarios(usuario,correo,clave)value('$nombre','$correo','$contraseña')";
$estado = $conn->query($sql);


}else{
 
   $sql="update usuarios set usuario='$nombre', correo='$correo',clave ='$contraseña'  where id=$id";
$estado = $conn->query($sql); 
    
}
header('Location: MostrarUsuario.php');
?>

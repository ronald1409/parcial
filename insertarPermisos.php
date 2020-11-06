<?php
$id_usuarios=$_GET['id_u'];
require_once('conexion.php');
$id_roles=$_GET['id'];



$sql="insert into permisos(id_usuarios,id_rol)value($id_usuarios,$id_roles)";
$estado=$conn->query($sql);
 header('Location: MostrarPermisos.php');
?>

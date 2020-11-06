<?php
require_once ('conexion.php');
$id=$_GET['id'];
$sql= 'delete from usuarios where id='.$id;
$estado=$conn->query($sql);
if($estado){
    header('Location: MostrarUsuario.php');
}else{
    var_dump('Error al eliminar');
}


?>
<?php
$conn->close();
?>

<?php
require_once ('conexion.php');
$id=$_GET['id'];
$sql= 'delete from roles where id='.$id;
$estado=$conn->query($sql);
if($estado){
    header('Location: roles.php');
}else{
    var_dump('Error al eliminar');
}


?>
<?php
$conn->close();
?>



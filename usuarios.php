<?php
require_once('conexion.php');
$id=0;
$nombre='';
$correo='';
$contraseña='';

if(isset($_GET["id"])){
    $sql = "select *from usuarios where id =".$_GET['id'];
   
 
    $result=$conn->query($sql);
    $fila = $result->fetch_array();
    
    $id=$fila['id'];
    $nombre=$fila['usuario'];
    $correo=$fila['correo'];
    $contraseña = $fila['clave'];
    
}
?>

<html lan="es">
    <head>
        <meta charset="UTP-8">
        <title></title>
    </head>
    <style type="text/css">
         body{
        background-image: url('fondo.jpg')   
    } 
    form{
        font-size: 18;
        font-family: Arial black;
    }
    input{
        border-radius:4px;
        height: 30px;
        width: 210px;
    }
    .enviar{
        background-color: gray;
        width: 120px;
        height: 50px;
        font-family: Arial black;
        
    }
    </style>
    <body>
        <h2><?php if($id==0){?>Registro de usuarios<?php }else{?> Editar Usuario <?php }?></h2>
        <br>
        <fieldset> <legend>Datos</legend>
            <form action="procesa.php" method="post">
                <input type="hidden" value="<?= $id ?>" name="id">
            <label>Usuario</label>
            <input type="text" name="nombre" value="<?= $nombre ?>" placeholder="Escriba el  nombre del  usuario">
            <br><br>
            <label>Correo</label>
            <input type="text" name="correo" value="<?= $correo?>" placeholder="Correo">
            <br><br>
            <label>Contraseña</label>
            <input type="password" name="contraseña" value="<?= $contraseña ?>" placeholder="Contraseña">
            <br><br>
            <input class="enviar" type="submit" value="Registrarse" >
        </form>
            </fieldset>
      
        <a href="index.php">Menu principal</a>
        <br><br>
        <a href="MostrarUsuario.php">Mostrar Registros</a>
    </body>
</html>

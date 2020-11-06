<?php
require_once('conexion.php');

$sql='select p.id,u.usuario,r.descripcion from usuarios u inner join permisos p on p.id_usuarios=u.id inner join roles r on p.id_rol=r.id';
$result= $conn->query($sql);
  while($fila = $result->fetch_array()){   //SACAR LA FILA EN FORMA DE ARREGLO
              $registros[]=$fila;
                  
              }
?>
<html lag="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style type="text/css">
         body{
        background-image: url('fondo.jpg')   
    }
     table{
        color:white;
        background: rgba(0,0,0,0.4);
        border-radius: 4px;
        width: 600px;
        height: 200px;
        left: 250px;
        position: relative;
        
    }
    </style>
    <body>
        
        <h1 align="center" style="color:white"> Lista de Permisos</h1>
        <br>
        <hr>
        <table border='2px'>
            <tr>
                <th>Nro</th>
                <th>Usuario</th>
                <th>Rol</th>
            </tr>
            <?php 
            if($result->num_rows>0){
                $cont=0;
            foreach ($registros as $item ):
            
            ?>
            <tr>
                <th><?= ++$cont?></th>
                <th><?=  $item['usuario']?></th>
                <th><?=  $item['descripcion']?></th>
                <td><a href="insertarPermisos.php?id=<?= $item['id'] ?>">Modificar</a></td>
                <td><a href="eliminarPermisos.php?id=<?=$item['id'] ?>"  >Eliminar</a></td>
            </tr>
            <?php
            endforeach;
            }
            ?>
        </table>
        <br><br>
        <a href="index.php">Volver a menu</a>
        <br><br>
        <a href="permisos.php">Nuevo</a>
    </body>
</html>



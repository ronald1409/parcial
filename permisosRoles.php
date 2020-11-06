<?php
require_once ('conexion.php');
$id_usuario=$_GET['id'];


$sql='select *  from roles';
$result= $conn->query($sql);
  while($fila = $result->fetch_array()){   //SACAR LA FILA EN FORMA DE ARREGLO
              $registros[]=$fila;
                 
              }

?>
<html lan="es">
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
            <h1 align="center">Roles de usuario</h1>
            <br>
             <table border='2px'>
            <tr>
                <th>Nro</th>
                <th>Descripcion</th>
            </tr>
            <?php 
            if($result->num_rows>0){
                $cont=0;
            foreach ($registros as $item ):
            
            ?>
            <tr>
                <th><?= ++$cont?></th>
                <th><?=  $item['descripcion']?></th>
                <td><a href="insertarPermisos.php?id=<?= $item['id'] ?>&id_u=<?= $id_usuario?>">Elegir Rol</a></td>
                
            </tr>
            <?php
            endforeach;
            }
            ?>
        </table>
        </body>
</html>


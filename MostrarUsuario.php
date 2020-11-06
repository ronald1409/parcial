<?php
require_once ('conexion.php');

$sql='select *  from usuarios';
$result= $conn->query($sql);
  while($fila = $result->fetch_array()){   //SACAR LA FILA EN FORMA DE ARREGLO
              $registros[]=$fila;
                  
              }
?>
<HTML lag="es">
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
    .subtitle{
        font-family: Arial Black;
    }
    </style>
    <body>
        <h1 align="center" style="color:white">Registro de Usuarios</h1>
        <br>
        <hr>
        <br>
        <br>
        <table border="2px">
            <tr class="subtitle">
                <td>Nro</td>
                <td>Usuario</td>
                <td>Correo</td>
                
            </tr>
            
            <?php
            if($result->num_rows>0){
                $cont=0;
            foreach ($registros as $item ):
            ?>
            <tr>
                <td><?= ++$cont; ?></td>
                <td><?= $item['usuario']?></td>
                <td><?= $item['correo']?></td>
                <td><a href="Usuarios.php?id=<?= $item['id'] ?>">Modificar</a></td>
                <td><a href="eliminar.php?id=<?=$item['id'] ?>" onclick="return confirm(\'Esta seguro\')">Eliminar</a></td>
            </tr>
            <?php
            endforeach;
            }
            ?>
            
        </table>
        <a href="usuarios.php" style='color:white'>Nuevo</a>
        <br><br>
        <a href="index.php">Volver a menu</a>
    </body>
</HTML>
<?php
$conn->close();
?>

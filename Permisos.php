<?php
require_once ('conexion.php');

$sql='select *  from usuarios';
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
        <h1  >Elegir permiso para el usuario:</h1>
       
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
                <td><a href="permisosRoles.php?id=<?= $item['id'] ?>">Habilitar permiso para</a></td>
               
            </tr>
            <?php
            endforeach;
            }
            ?>
            
        </table> 
        
        <a href="MostrarPermisos.php">MOSTRAR PERMISOS</a>
    </body>
</html>
<?php
$conn->close();
?>
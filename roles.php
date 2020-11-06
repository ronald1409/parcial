<?php
require_once('conexion.php');
$id=0;
$descripcion='';
$sql='select *  from roles';
$result= $conn->query($sql);
  while($fila = $result->fetch_array()){   //SACAR LA FILA EN FORMA DE ARREGLO
              $registros[]=$fila;
                  
              }

if(isset($_GET["id"])){
    $sql = "select *from roles where id =".$_GET['id'];
   
 
    $result=$conn->query($sql);
    $fila = $result->fetch_array();
    
    $id=$fila['id'];
    $descripcion=$fila['descripcion'];
    
}

?>
<html lag='es'>
    <head>
        <meta charset="UTP-8">
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
    input{
         border-radius:4px;
        height: 30px;
        width: 210px;
        
    }
    .enviar{
        
        background-color: silver;
    }
    
    </style>
    <body>
        <h1 align='center' style='oolor:white'>Roles</h1>
        <br>
        <hr>
        <br>
        <fieldset><legend></legend>
        <form action='procesaRoles.php' method='post'>
             <input type="hidden" value="<?= $id ?>" name="id">
            Descripcion:
            <input type='text' name='descripcion' value='<?= $descripcion?>' placeholder='Escrba la descripcion'>
            <br><br>
            <input class='enviar' type='submit' value='Enviar'>
        </form>
        </fieldset>  
        <br><br>
       
 
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
                <td><a href="roles.php?id=<?= $item['id'] ?>">Modificar</a></td>
                <td><a href="eliminaRoles.php?id=<?=$item['id'] ?>"  >Eliminar</a></td>
            </tr>
            <?php
            endforeach;
            }
            ?>
        </table>
        <br><br>
        <a href="index.php">Volver a menu</a>
    </body>
</html>

<?php
$conn->close();
?>
<?php
$user='root';
$database='bd_blog';
$pass='';
$host='127.0.0.1:33065';

$conn=  mysqli_connect($host, $user, $pass, $database);
if($conn->connect_errno>0){
    die('ERROR EN  CONEXION['.$conn->connect_error.']');   
}
?>


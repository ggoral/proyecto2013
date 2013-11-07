<?php
require_once "usuario.class.php";

$usuario = new Usuario();
//$atributos = array($_POST['user'],$_POST['password']);
 
$atributos = array("admin","admin");

$result = $usuario->obtener_usuario($atributos);
$cantidad = $usuario->cantidad($result);
print_r($result);

$usuarios = $usuario->obtener_todos_los_usuarios();
$cantidad = $usuario->cantidad($result);
print_r($usuarios);

foreach ($usuarios as $usuario){
  echo $usuario['user']," ";
  echo $usuario['pass'],"\n";
}
?>
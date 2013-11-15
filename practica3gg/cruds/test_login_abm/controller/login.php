<?php
session_start();

require_once "../model/usuario_interface.php";

try {
  if (((isset($_POST['user'])) and (trim($_POST['user']))) and ((isset($_POST['pass']))and(trim($_POST['pass']))))
    {
    $usuario = ORM_usuario::buscar_usuario_login($_POST['user'],$_POST['pass']);
    if ($usuario){
      //require "access_granted.php";
        
      $_SESSION['usuario']['id_usuario'] = $usuario->getId_usuario();
      $_SESSION['usuario']['username'] = $usuario->getUsername();
      $_SESSION['usuario']['rol'] = $usuario->getId_rol();
      
      header("Location: frontcontroller.php");
      }
    else {
      require "access_denied.php";
      }
    }
  else {
    require "login_simple_form.php"; 
    } 
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>

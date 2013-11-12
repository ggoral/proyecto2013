<?php
session_start();

require_once "usuario_interface.php";

try {
  if (((isset($_POST['user']))and(trim($_POST['user']!=''))) and ((isset($_POST['pass']))and($_POST['pass']!=''))){
    $usuario = ORM_usuario::buscar_usuario($id_usuario);

    if ($usuario){
      //echo "ACCESS GRANTED\n";
        
      $_SESSION['usuario']['id_usuario'] = $usuario->getId_usuario();
      $_SESSION['usuario']['username'] = $usuario->getUsername();
      $_SESSION['usuario']['rol'] = $usuario->getId_rol();
      $parametro_para_vista = $usuario->getUsername();
      var_dump($usuario);die();
      require 'vista.php';      
      }
    else {
      //require "access_denied.php"
      echo "ACCESS DENIED";
    }
  }
  else {
    require('login_simple_form.php'); 
  } 
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>

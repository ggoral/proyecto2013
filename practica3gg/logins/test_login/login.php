<?php
session_start();

require_once "usuario_interface.php";

try {
  if (((isset($_POST['user']))and(trim($_POST['user']!=''))) and ((isset($_POST['pass']))and($_POST['pass']!=''))){
    //print_r($_POST);
    //print_r($_SESSION);
    
    $id_usuario = ORM_usuario::buscar_usuario_login($_POST['user'], $_POST['pass']);
    $usuario = ORM_usuario::buscar_usuario($id_usuario); //para no tener dos accesos a base!
    //if ($usario)
    if ($id_usuario){
      //echo "ACCESS GRANTED\n";
        
      
      //echo 'dirname(__FILE__).';
      // $_SESSION['usuario'] = $usuario
      $_SESSION['usuario']['id_usuario'] = $usuario->getId_usuario();
      $_SESSION['usuario']['username'] = $usuario->getUsername();
      $_SESSION['usuario']['rol'] = $usuario->getId_rol();
      $parametro_para_vista = "hola";
      require 'vista.php';      
      }
    else {
      require "access_denied.php"
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

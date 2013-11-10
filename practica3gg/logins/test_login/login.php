<?php
session_start();

try {
  if (((isset($_POST['user']))and($_POST['user']!='')) and ((isset($_POST['pass']))and($_POST['pass']!=''))){
    //print_r($_POST);
    //print_r($_SESSION);
    
    require_once "usuario_interface.php";

    $id_usuario = ORM_usuario::buscar_usuario_login($_POST['user'], $_POST['pass']);
    
    if ($id_usuario){
      //echo "ACCESS GRANTED\n";
      
      $usuario = ORM_usuario::buscar_usuario($id_usuario);
      
      //echo 'dirname(__FILE__).';
      // $_SESSION['usuario'] = $usuario
      $_SESSION['usuario']['id_usuario'] = $usuario->getId_usuario();
      $_SESSION['usuario']['username'] = $usuario->getUsername();
      $_SESSION['usuario']['rol'] = $usuario->getId_rol();

      require 'vista.php';      
      }
    else {
      echo "ACCESS DENIED";
    }
  }
  else {
    require('login_simple_form.html'); 
  } 
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>

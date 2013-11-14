<?php
session_start();

echo "Debuging..."; die();

require_once "usuario_interface.php";

try {
    $id_usuario = 1;
    $usuario = ORM_usuario::buscar_usuario($id_usuario);

    if ($usuario){
      //require "'ACCESS GRANTED\n";
        
      $_SESSION['usuario']['id_usuario'] = $usuario->getId_usuario();
      $_SESSION['usuario']['username'] = $usuario->getUsername();
      $_SESSION['usuario']['rol'] = $usuario->getId_rol();
      $parametro_para_vista = $usuario->getUsername();
      //var_dump($usuario);die();
      require 'vista.php';      
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

<?php
session_start();
/* 
Consultar las siguientes lineas porque no tienen sentido.
session_unset();
session_destroy();
session_start();
*/

try {
  if (((isset($_POST['user']))and($_POST['user']!='')) and ((isset($_POST['pass']))and($_POST['pass']!=''))){
    print_r($_POST);
    print_r($_SESSION);
    
    require_once 'usuario.class.php';
    $usuario = new Usuario();
    $parametro_user_pass = array($_POST['user'],$_POST['pass']);
    $result = $usuario->obtener_usuario($parametro_user_pass);
    $cant = $usuario->cantidad_resultados($result);
    /*  
    if ($cant != 0){
      //entra porque encontro al usuario
      
      //Obtengo los permisos
      $rol = $result[0]['user'];
      //if $rol == admin
      //  header 'vista_administrador'

      //$perfil = $usuario->obtener_perfil(array($rol));
      //require 'vista.php';      
      }
    else{
      echo "pass error";
      }
      */
  }
  else {
    require('login_simple_form.html'); 
  } 
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>

<?php   
session_start();
session_unset();
session_destroy();
session_start();

try {
  if (((isset($_POST['user']))and($_POST['user']!=''))or((isset($_POST['pass']))and($_POST['pass']!=''))){
    require_once 'usuario_controller.php';


    $usuario = new Usuario();
    $atributos = array($_POST['user'],$_POST['pass']);
    $result = $usuario->obtener_usuario($atributos);
    $cant = $usuario->cantidad_resultados($result);

    if ($cant != 0){
      //entra porque encontro al usuario
      $rol = $result[0]['user'];
      $perfil = $usuario->obtener_pass(array($rol));
      include 'controller.php';      
      }
    else{
      echo "pass error";
      }
    }       
  else {
    require 'login_simple_form.html'; 
  } 
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>

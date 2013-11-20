<?php
//$tipo_usuario = array(1);
//require_once "access_check.php";

try {

  $display_parameter = array();
  $template_parameter = "map1.twig";
  require 'vista.twig.php';  
  
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>



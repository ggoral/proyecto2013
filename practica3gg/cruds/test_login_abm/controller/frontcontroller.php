<?php
session_start();

//echo "Debuging..."; die();

try {
  $display_parameter = array(
      'navbar_list' => array(
        'Home' =>'contacts.php',
        'News' =>'contacts.php',
        'Contacts' =>'contacts.php',
        'About' =>'contacts.php',
        'Login' =>'login.php'),
      'footer' => 'El pie de pagina');
  $template_parameter = "index.twig";

  if (array_key_exists('usuario', $_SESSION)){
//    require "access_granted.php";
    //array_push($display_parameter['navbar_list'], "'Logout'=>'logout.php'");
    $display_parameter['navbar_list']['Logout'] = 'logout.php';
    }
  require 'vista.twig.php'; 
}
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>

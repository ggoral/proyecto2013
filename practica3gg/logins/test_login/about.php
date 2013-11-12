<?php
$tipo_usuario = array("1");
require_once "access_check.php";

try {
  if(isset($_SESSION) && sizeof($_SESSION)){
    print_r($_SESSION);
    print_r($_GET);
    print_r($_POST);
    print_r($_SERVER['QUERY_STRING']);
  }
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>

<?php
$tipo_usuario = new Array("admin");
require_once "access_check.php";

try {
  if(isset($_SESSION)){
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

<?php
require_once "access_check.php";

try {
  if(isset($_SESSION)){
    print_r($_SESSION);
  }
} 
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>

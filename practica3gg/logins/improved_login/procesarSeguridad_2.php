<?php
session_start();
if (array_key_exists('usuario', $_SESSION)){
  $usuario = $_SESSION['usuario'];
  echo $usuario;
}
else{
  header("location: /SAT/login.php?error=error");
  exit;
}
?>
<?php
session_start();
if ((array_key_exists('usuario', $_SESSION)) && (array_key_exists($_SESSION['usuario']['rol'], $tipo_usuario)))
  {
  $usuario = $_SESSION['usuario'];
  }
else 
  { 
  header("location: login.php");
  }
?>